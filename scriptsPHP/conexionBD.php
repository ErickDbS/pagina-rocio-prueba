<?php

function conexion(){
         // Datos de conexión a la base de datos
        $host = "192.170.0.115"; // Cambiar si tu base de datos no está en el mismo servidor
        $usuario = "erick"; // Cambiar por el nombre de usuario de tu base de datos
        $password = "01272002"; // Cambiar por la contraseña de tu base de datos
        $base_datos = "edgar"; // Cambiar por el nombre de tu base de datos

         // Crear conexión
        $con = new mysqli($host, $usuario, $password, $base_datos);

        // Revisar la conexión
        if ($con->connect_error) {
            die("Error de conexión: " . $con->connect_error);
        }

        return $con;
    }

?>