<?php
    $host = "127.0.0.1"; // Cambia esto a la dirección de tu servidor de base de datos si es diferente.
    $username = "root";
    $password = "";
    $database = "hotel_el_ruby_db";

    $conexion = new mysqli($host, $username, $password, $database);
    if ($conexion) {
        echo 'si se pudo conectar a la base de datos';
    }
    else {
        echo 'no se pudo conectar a la base de datos';
    }
?>