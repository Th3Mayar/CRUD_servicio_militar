<?php

include("../Database/connection.php");

$conn = connection();

$id = $_GET["id"];

$sql = "DELETE FROM t_cuarteles WHERE ID_Cuartel='$id'";
$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>