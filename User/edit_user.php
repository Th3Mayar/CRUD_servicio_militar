<?php

include("../Database/connection.php");

$conn = connection();

$id = $_POST["id"];
$user = $_POST['Usuario'];
$pass = $_POST['Pass'];

$sql = "UPDATE t_usuario SET Usuario='$user', Pass='$pass' WHERE ID_Usuario='$id'";

$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>