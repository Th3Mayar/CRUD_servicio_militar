<?php
    include("../Database/connection.php");
    $conn = connection();

    $ID_Soldado=$_GET['ID_Soldado'];
    $sql = "DELETE FROM t_soldado WHERE ID_Soldado='$ID_Soldado'";
    $query =mysqli_query($conn, $sql);

    if($query){
        Header("Location: index.php");
    };
?>