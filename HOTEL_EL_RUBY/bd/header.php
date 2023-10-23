<?php
    session_start();
    
    if (isset($_SESSION['usuario'])) {
        // Aquí incluye cualquier contenido que desees mostrar cuando el usuario haya iniciado sesión
        echo '<a href="cerrar_sesion.php">Cerrar Sesión</a>';
    } else {
        // Si no ha iniciado sesión, puedes mostrar un enlace de inicio de sesión
        echo '<a href="login.php">Iniciar Sesión</a>';
    }
?>