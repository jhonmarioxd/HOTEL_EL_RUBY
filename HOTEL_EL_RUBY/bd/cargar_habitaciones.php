<?php
// Conectar a la base de datos (reemplaza con tus credenciales)
require_once('conexion_bd.php');  

// Consulta para obtener las habitaciones
$sql = "SELECT id, nombre_hb FROM habitaciones";
$result = $conexion->query($sql);

$habitaciones = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $habitaciones[$row["id"]] = $row["nombre_hb"];
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Devolver los datos en formato JSON
echo json_encode($habitaciones);
?>
