<?php
    
    include("../Database/connection.php");
    $conn = connection();

    $id = $_GET['id'];

    $sql="SELECT * FROM t_cuarteles WHERE ID_Cuartel='$id'";
    $sql2 = "SELECT * FROM t_cuarteles";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="../CSS/style.css" rel="stylesheet">
    <title>Editar Cuarteles</title>
</head>

<body>
    <h1>Editar cuartel</h1>
        <div class="users-form">
            <form action="edit_cuartel.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Cuartel']?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                <input type="text" name="Ubicacion" placeholder="Ubicacion" value="<?= $row['Ubicacion']?>">
                <input type="submit" value="Actualizar">
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
                <?php while ($row = mysqli_fetch_array($query2)): ?>
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