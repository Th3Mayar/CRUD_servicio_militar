<?php
include("../Database/connection.php");
$conn = connection();

$ID_Soldado=$_GET['ID_Soldado'];
$sql = "SELECT * FROM t_soldado WHERE ID_Soldado='$ID_Soldado'";
$sql2 = "SELECT * FROM t_soldado";

$query = mysqli_query($conn, $sql);

$query2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="editar_usuario.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="ID_Soldado" value="<?= $row['ID_Soldado'] ?>">
            <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre'] ?>">
            <input type="text" name="Apellido" placeholder="Apellido" value="<?= $row['Apellido'] ?>">
            <input type="text" name="Grado" placeholder="Grado" value="<?= $row['Grado'] ?>">
            <input type="submit" value="Actualizar">
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
                <?php while($row = mysqli_fetch_array($query2)): ?>
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