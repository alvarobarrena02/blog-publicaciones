<?php
$correo = $_POST['email'];

$conn = new PDO('mysql:host=localhost;port=3306;dbname=hito', 'root', '');
//Preparar la consulta
$consulta = "DELETE FROM `registro` WHERE `registro`.`email` = '".$correo."';";
//Ejecutar la consulta
$resultado = $conn->query($consulta);
header("Location: ../publica/verPosts.php");