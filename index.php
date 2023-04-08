<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Iniciar Sesion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="CSS/styleLoginRegister.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="container-everyone">
                <div class="boxdoor">
                    <div class="boxdoor-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <button id="btn-login">Iniciar Sesion</button>
                    </div>
                    <div class="boxdoor-register">
                        <h3>¿Aún no tengo una cuenta?</h3>
                        <button style="background-color:#fff;" type="submit" id="btn-register"><a href="Register.php" style="list-style:none; text-decoration:none; color:#000;">Registrarse</a></button>
                    </div>
                </div>
                <div class="login-register">
                    <!-- Formulario de login-->
                    <form method="POST" action="\CRUD_User\User\Login.php" class="form-register">
                        <h2>Iniciar Sesion</h2>
                        <input type="text" placeholder="Usuario" id="usuario" name="usuario" required>
                        <input type="password" placeholder="Password" id="pass" name="pass" required>
                        <button type="submit">Ingresar</button>
                    </form>
                </div>
        </div>
        </main>
    </body>
</html>