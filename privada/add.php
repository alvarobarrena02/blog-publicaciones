<?php
session_start();
// Recoger los datos del formulario
$correo = $_POST['email'];
$password = $_POST['password'];
$titulo = $_POST['title'];
$contenido = $_POST['content'];
$fecha = $_POST['fecha'];
$autor = $_POST['autor'];
$imagen = $_POST['imagen'];

//Conexión a la base de datos
$conn = new PDO('mysql:host=localhost;port=3306;dbname=hito', 'root', '');
//Preparar la consulta
$consulta = "INSERT INTO `registro` (`id`, `email`, `password`, `titulo`, `contenido`, `fecha`, `autor`) VALUES (NULL, '".$correo."', MD5('".$password."'), '".$titulo."', '".$contenido."', '".$fecha."', '".$autor."');";
//Ejecutar la consulta
$resultado = $conn->query($consulta);

//Comprobar si se ha insertado el registro
if ($resultado) {
    echo "<link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css'>";
    echo "<h2 class='p-2 m-3'>Se ha insertado el registro.</h2>";
    echo "<a href='../publica/verPosts.php' class='btn btn-success fw-bold p-2 m-3'>Ver publicaciones</a>";

} else {
    echo "<h2>No se ha insertado el registro</h2>";
}