<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrarse</title>
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
                    <div class="boxdoor-register">
                        <h3>¿Aún no tengo una cuenta?</h3>
                        <button type="submit" id="btn-register">Registrarse</button>
                    </div>
                    <div class="boxdoor-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <button style="background-color:#fff;" id="btn-login"><a href="index.php" style="list-style:none; text-decoration:none; color:#000;">Iniciar Sesion</a></button>
                    </div>
                </div>
                <div class="container-everyone">
                    <div class="login-register">
                        <!-- Formulario de registro-->
                        <form method="POST" action="\CRUD_User\User\Register.php" class="form-login">
                            <h2>Registrarse</h2>
                            <input type="text" placeholder="Usuario" id="user" name="user" required>
                            <input type="password" placeholder="Password" id="pass" name="pass" required>
                            <button type="submit">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>