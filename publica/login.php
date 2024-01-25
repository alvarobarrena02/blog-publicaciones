<!DOCTYPE html>
<html lang="eS">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <title>Inicio de sesión</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-uppercase text-center fw-bold p-2">Inicio de sesión</h1>
            <form class="form-control">
                <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control m-2" placeholder="Introduce tu correo electrónico">
                <label for="passwd">Contraseña</label>
                <input type="password" name="passwd" id="passwd" class="form-control m-2" placeholder="Introduce tu contraseña">
                <input type="submit" value="Iniciar sesión" class="btn btn-primary m-2">
            </form>
        </div>
        <?php
            $login_user = "admin@gmail.com";
            $login_pass = "admin";
            //Conexión a la base de datos
            $conn = new PDO('mysql:host=localhost;port=3306;dbname=hito', 'root', '');

            $consulta = $conn->query ("SELECT * FROM registro ");

            while ($usuario = $consulta->fetch()) {
                if ($usuario['email'] == $login_user && $usuario['password'] == $login_pass) {
                    echo "Login correcto";
                    session_start();
                    $_SESSION['token'] = session_id();
                     echo $_SESSION['token'];
                } else {
                    echo "Login incorrecto";
                }
            }

        ?>
        <p class="text-center">¿No tienes cuenta? <a href="../privada/add.html">Regístrate</a></p>
        <a href="../index.php" class="btn btn-success fw-bold m-2 p-2">Volver a inicio</a>

        <!--Cargar el archivo jquery-->
        <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
        <!--Cargar el archivo javascript de bootstrap-->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>