<?php
$conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');
$consulta = "SELECT * FROM REGISTRO";
$resultado = $conn->query($consulta);
// Mostar los datos de la tabla mediante una tabla HTML con bootstrap
echo "<link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css'>";
echo "<h1 class='text-uppercase fw-bold text-center m-3'>Listado de publicaciones</h1>";
echo "<div class='container'>";
echo "<table class='table table-striped table-bordered table-hover table-warning m-3'>";
echo "<tr class='table-primary'>";
echo "<th class='text-center'>ID</th>";
echo "<th class='text-center'>Correo electrónico</th>";
echo "<th class='text-center'>Título</th>";
echo "<th class='text-center'>Contenido</th>";
echo "<th class='text-center'>Fecha</th>";
echo "<th class='text-center'>Autor</th>";
echo "</tr>";
while ($registro = $resultado->fetch()) {
    echo "<tr>";
    echo "<td class='fw-bold'>" . $registro['id'] . "</td>";
    echo "<td>" . $registro['email'] . "</td>";
    echo "<td>" . $registro['titulo'] . "</td>";
    echo "<td>" . $registro['contenido'] . "</td>";
    echo "<td>" . $registro['fecha'] . "</td>";
    echo "<td>" . $registro['autor'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../index.php' class='btn btn-success fw-bold'>Volver a inicio</a>";
echo "</div>";
