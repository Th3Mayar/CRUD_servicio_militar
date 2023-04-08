<?php
include("../Database/connection.php");
$conn = connection();
$sql = "SELECT * FROM t_soldado";
$query =mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>CRUD Soldado</title>
</head>
<body>
<button style="background:#009688; padding:10px 20px; margin-right:1285px; margin-top:6px;"><a style="list-style:none; text-decoration:none; color:#fff;" href="../Dashboard.php">Salir</a></button>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Crear Soldado</h1>
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Apellido" placeholder="Apellido">
            <input type="text" name="Grado" placeholder="Grado">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Soldados registrados</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID Soldado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Grado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_Soldado'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Apellido'] ?></th>
                        <th><?= $row['Grado'] ?></th>

                        <th><a href="update.php?ID_Soldado=<?= $row['ID_Soldado'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?ID_Soldado=<?= $row['ID_Soldado'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>