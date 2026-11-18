<?php
session_start();
include("conexion_proyecto.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM estudiante WHERE nombre = '$nombre' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION['usuario'] = $nombre;
        header("Location: PROYECTO1.php");
        exit();
    } else {
        echo "<script>alert('Nombre o contraseña incorrectos.'); window.location.href='Ventana.php';</script>";
    }
}
$conexion->close();
?>