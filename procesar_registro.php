<?php
include("conexion_proyecto.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO estudiante (nombre, correo, contrasena, telefono) VALUES ('$nombre', '$correo', '$contrasena', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: Ventana.php");
        exit();
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
}
$conexion->close();
?>