<?php
    session_start();

    require_once "conexionBD.php";

    $conexion = conexion();
    // Variables para el inicio de sesión
    $nombre_usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];

    // Consulta para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuariosRegistrados WHERE nombre = '$nombre_usuario' AND contraseña = '$contraseña'"; 
    $resultado = $conexion->query($sql);

    // Verificar si se encontró algún resultado
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $_SESSION['nombre_usuario'] = $fila['nombre'] . ' ' . $fila['apellido']; // Concatenar nombre y apellido
        $_SESSION['id_usuario'] = $fila['id']; // Guardar el ID del usuario si lo necesitas posteriormente
    
        // Verificar si la configuración está completada
        if ($fila['configuracion_completada'] == 1) {
            header("Location: inicio.html"); // Si la configuración está completada, redirigir a la página principal
        } else {
            header("Location: ../configuracionesDieta.html"); // Si la configuración no está completada, redirigir a la página de configuración inicial
        }
        exit();
    } else {
        header("Location: ../index.php");
        // $errorLogin = "Usuario o contraseña incorrectos.";
        $_SESSION['errorLogin'] = "Usuario o contraseña incorrectos";
        header("Location: ../index.php");
    }

    // Cerrar conexión
    $conexion->close();
?>