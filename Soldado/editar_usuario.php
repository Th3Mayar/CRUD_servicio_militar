<?php
    include("../Database/connection.php");
    $conn = connection();

    $ID_Soldado = $_POST['ID_Soldado'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Grado = $_POST['Grado'];

    $sql = "UPDATE t_soldado SET Nombre='$Nombre', Apellido='$Apellido', Grado='$Grado' WHERE ID_Soldado='$ID_Soldado'";
    $query =mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    };
?>