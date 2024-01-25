<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>Hito programación</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <header id="header" class="col-12 p-3 text-center">
                    <h1 class="text-uppercase fw-bold">Diferencias lenguajes de programación</h1>
                </header>
            </div>

            <nav id="menu" class="col-12 p-2">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="privada/add.html">Formulario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publica/verPosts.php">Ver publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publica/login.php">Iniciar sesión</a>
                    </li>
                    <li>
                        <a class="nav-link" href="privada/update.html">Actualizar publicaciones</a>
                    </li>
                    <li>
                        <a class="nav-link" href="privada/delete.html">Eliminar publicaciones</a>
                    </li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-12">
                    <h2>Programación orientada a objetos (POO)</h2>
                    <p class="text-justify">
                        En la programación orientada a objetos, los programas están diseñados en torno a objetos, que son entidades que contienen datos y métodos. Los objetos pueden interactuar entre sí mediante la llamada a métodos y el intercambio de mensajes. La POO permite la encapsulación de datos, lo que significa que los datos están protegidos de accesos no autorizados y solo pueden ser manipulados mediante los métodos del objeto. Los lenguajes de programación orientados a objetos incluyen Java, Python, C++, Ruby, y muchos más.
                    </p><hr>
                </div>
                <div class="col-12">
                    <h2>Programación orientada a eventos (POE)</h2>
                    <p class="text-justify">
                        En la programación orientada a eventos, el programa responde a eventos externos, como la entrada del usuario o la llegada de datos a través de la red. El programa se divide en pequeñas secciones que se activan cuando se produce un evento. Los lenguajes de programación orientados a eventos incluyen JavaScript, Visual Basic, ActionScript, y otros.
                    </p><hr>
                </div>
                <div class="col-12">
                    <h2>Programación procedimental</h2>
                    <p class="text-justify">
                        En la programación procedimental, el programa está compuesto por una secuencia de instrucciones que se ejecutan una tras otra. La programación procedimental se basa en la idea de un procedimiento o función, que es una sección de código que realiza una tarea específica. Los lenguajes de programación procedimentales incluyen C, Pascal, Fortran y BASIC.
                    </p><hr>
                </div>
            </div>
        </div>
        <?php
            require_once 'cookie.php'
        ?>
        <!--Cargar el archivo jquery-->
        <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
        <!--Cargar el archivo javascript de bootstrap-->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>