<?php
include("../Database/connection.php");
$conn = connection();

$sql = "SELECT * FROM t_cuarteles";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>Cuartel CRUD</title>
</head>

<body>
<button style="background:#009688; padding:10px 20px; margin-right:1285px; margin-top:6px;"><a style="list-style:none; text-decoration:none; color:#fff;" href="../Dashboard.php">Salir</a></button>
    <div class="users-form">
        <h1>Crear Cuartel</h1>
        <form action="insert_cuartel.php" method="POST">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Ubicacion" placeholder="Ubicacion">
            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="users-table">
        <h2>Cuarteles registrados</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_Cuartel'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Ubicacion'] ?></th>
                        <th><a href="update_cuartel.php?id=<?= $row['ID_Cuartel'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_cuartel.php?id=<?= $row['ID_Cuartel'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>