<?php

include("../Database/connection.php");

$conn = connection();

$id = $_GET["id"];

$sql = "DELETE FROM t_usuario WHERE ID_Usuario='$id'";
$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>