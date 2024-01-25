<?php
session_start();
$correo = $_POST['email'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];

//Conexión a la base de datos
$conn = new PDO('mysql:host=localhost;port=3306;dbname=hito', 'root', '');

//Preparar la consulta
$consulta = "UPDATE `registro` SET `titulo` = '".$titulo."', `contenido` = '".$contenido."', `fecha` = '".$fecha."' WHERE `registro`.`email` = '".$correo."';";
//Ejecutar la consulta
$resultado = $conn->query($consulta);

header("Location: ../publica/verPosts.php");