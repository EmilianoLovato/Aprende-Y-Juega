<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dat";

$conexion = new mysqli($host, $user, $password, $database);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>