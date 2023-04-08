<?php
    include("../Database/connection.php");
    $conn = connection();

    $ID_Soldado = NULL;
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Grado = $_POST['Grado'];

    $sql = "INSERT INTO t_soldado VALUES('$ID_Soldado','$Nombre','$Apellido','$Grado')";
    $query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }
?>