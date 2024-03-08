<?php
// Conexión a la base de datos
$servername = "192.168.1.112"; 
$username = "erick"; 
$password = "01272002"; 
$dbname = "edgar"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

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
$sql = "INSERT INTO usuariosRegistrados (nombre, apellidos, correo, contraseña)
        VALUES ('$nombre', '$apellidos', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    // Notificación de éxito
    echo "<script>alert('Usuario registrado correctamente.');</script>";
    // Redirigir al usuario a la página de inicio después de 2 segundos
    echo "<script>setTimeout(function(){ window.location.href = 'index.html'; }, 2000);</script>";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
