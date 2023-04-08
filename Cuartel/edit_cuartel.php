<?php

include("../Database/connection.php");

$conn = connection();

$id = $_POST["id"];
$nombre = $_POST['Nombre'];
$location = $_POST['Ubicacion'];

$sql = "UPDATE t_cuarteles SET Nombre='$nombre', Ubicacion='$location' WHERE ID_Cuartel='$id'";

$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>