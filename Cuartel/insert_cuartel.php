<?php

include("../Database/connection.php");

$conn = connection();

$nombre = $_POST['Nombre'];
$ubicacion = $_POST['Ubicacion'];

$sql = "INSERT INTO t_cuarteles(Nombre, Ubicacion) 
            VALUES('$nombre','$ubicacion')
        ";

$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>