<?php
include("../Database/connection.php");
$conn = connection();

$sql = "SELECT * FROM t_usuario";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <button style="background:#009688; padding:10px 20px; margin-right:1285px; margin-top:6px;"><a style="list-style:none; text-decoration:none; color:#fff;" href="../Dashboard.php">Salir</a></button>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="Usuario" placeholder="Usuario">
            <input type="text" name="Password" placeholder="Password">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_Usuario'] ?></th>
                        <th><?= $row['Usuario'] ?></th>
                        <th><?= $row['Pass'] ?></th>
                        <th><a href="update_user.php?id=<?= $row['ID_Usuario'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['ID_Usuario'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>