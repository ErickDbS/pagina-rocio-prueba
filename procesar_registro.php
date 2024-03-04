<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "01272002", "local-rocio");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contrasena = $_POST['Contrasena'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO registrar_usuarios (Nombre, Apellidos, Email, Contraseña) 
        VALUES ('$nombre', '$apellidos', '$correo', '$contrasena')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
