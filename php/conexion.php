<?php
date_default_timezone_set('America/Mexico_City'); // Configura la zona horaria

$conexion = mysqli_connect("localhost", "root", "", "db_barberia");

if (!$conexion) {
    echo 'La conexión falló: ' . mysqli_connect_error();
}

// Asegurar que MySQL use la misma zona horaria
mysqli_query($conexion, "SET time_zone = '-06:00';"); // Ajusta según tu zona horaria
?>

