<?php
session_start();

require_once "conexionBD.php";

$conn = conexion();

$id_usuario = $_SESSION['id_usuario'];
$nombre_usuario = $_SESSION['nombre_usuario'];


$sql = "UPDATE usuariosRegistrados SET configuracion_completada = 'hola' WHERE id = '$id_usuario' AND nombre = '$nombre_usuario'";
//$sql = "INSERT INTO usuariosRegistrados (nombre, configuracion_completada) VALUES ('$nombre_usuario', '10')";
// Ejecutar las consultas SQL
if ($conn->query($sql) === TRUE) {
    header("Location: ../inicio.html");
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();


?>