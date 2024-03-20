<?php

require_once "conexionBD.php";

$conn = conexion();

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para insertar datos en la base de datos
$sql = "INSERT INTO usuariosRegistrados (nombre, apellidos, correo, contraseña, configuracion_completada)
        VALUES ('$nombre', '$apellidos', '$correo', '$contrasena','0')";

if ($conn->query($sql) === TRUE) {
    // Notificación de éxito
    echo "<script>alert('Usuario registrado correctamente.');</script>";
    // Redirigir al usuario a la página de inicio después de 2 segundos
    echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 2000);</script>";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
