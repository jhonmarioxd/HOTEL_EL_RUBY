<?php
// Inicia la sesión (si no se ha iniciado aún)
session_start();

// Destruye la sesión actual
session_destroy();

// Redirige al usuario a la página de inicio
header("Location: index.php");
exit;
?>