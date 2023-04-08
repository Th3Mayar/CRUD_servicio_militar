<?php

    include("../Database/connection.php");

    $conn = connection();

    $Usuario = $_POST['user'];
    $Pass = $_POST['pass'];

    $query = "INSERT INTO t_usuario(Usuario, Pass) 
                VALUES('$Usuario','$Pass')
            ";

    $verify_user = mysqli_query($conn,"SELECT * FROM t_usuario WHERE Usuario='$Usuario'");

    if (mysqli_num_rows($verify_user) > 0){
        echo '<script>
                alert("Usuario existente en la base de datos");
                window.location = "../index.php";
            </script>';
            
        exit();
    }

    $execute = mysqli_query($conn,$query);

    if($execute == 1){
        echo '<script>
                alert("Usuario creado exitosamente");
                window.location = "../index.php";
            </script>';
            
    }else{
        echo '<script>
                alert("Error al crear el usuario");
                window.location = "../index.php";
            </script>';
    }

    mysqli_close($conn);

?>