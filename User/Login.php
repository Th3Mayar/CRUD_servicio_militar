<?php

    session_start();

    include("../Database/connection.php");

    $conn = connection();

    $Usuario = $_POST['usuario'];
    $Pass = $_POST['pass'];

    $valuate = mysqli_query($conn, "SELECT * FROM t_usuario WHERE Usuario='$Usuario' AND Pass='$Pass'");

    if (mysqli_num_rows($valuate) > 0){
        $_SESSION['Usuario'] = $Usuario;
        header("location: ../Dashboard.php");

    }else{
        echo '<script>
                alert("Usuario no encontrado");
                window.location = "../index.php";
            </script>';
    }

    exit();

?>