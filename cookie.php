<?php
$ip = $_SERVER['REMOTE_ADDR']; //Almacena la IP del equipo que está accediendo
$fecha = date("d/m/Y H:i:s"); //Almacena la fecha y hora de acceso

//Crear la cookie
setcookie("ip", $ip, time() + 3600); //La cookie se crea con el nombre "ip" y el valor de la variable $ip y con una duración de 1 hora.
setcookie("fecha", $fecha, time() + 3600); //La cookie se crea con el nombre "fecha" y el valor de la variable $fecha y con una duración de 1 hora.

//Comprobar si la cookie existe
if (isset($_COOKIE['ip'])) {
    echo "<p class='text-center fw-bold'>Estás accediendo desde la IP: ".$_COOKIE['ip']. " y la fecha de acceso es: ".$_COOKIE['fecha']."</p>";
} else {
    echo "<p class='text-center fw-bold'>No se ha creado la cookie, recarga la página</p>";
}