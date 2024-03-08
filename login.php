<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "192.168.1.112";
    $username = "erick"; 
    $password = "01272002"; 
    $dbname = "edgar"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    if (!empty($Usuario) && !empty($Contraseña)) { // Verifica que los campos no estén vacíos
        $sql = "SELECT * FROM usuariosRegistrados WHERE nombre='$Usuario' AND contraseña='$Contraseña'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) { // Si se encontraron resultados, las credenciales son válidas
            $_SESSION['Usuario'] = $Usuario;
            header("Location: inicio.html"); // Redirige al usuario a la página de inicio
            exit();
        } else {
            $error_message = "Usuario o contraseña incorrectos.";
        }
    } else {
        $error_message = "Por favor, complete todos los campos.";
    }

    $conn->close();
}
?>

