<?php

include("../Database/connection.php");

$conn = connection();

$id = null;
$user = $_POST['Usuario'];
$pass = $_POST['Password'];

$sql = "INSERT INTO t_usuario VALUES('$id','$user','$pass')";

$query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    }

?>