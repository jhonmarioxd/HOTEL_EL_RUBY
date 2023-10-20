<?php
function consultarTarifa() {
    $cantidadPersonas = $_POST['cantidad_de_personas'];

    require_once('conexion_bd.php');
    // Realiza una consulta SQL para obtener las habitaciones disponibles
    $query = "SELECT * FROM habitaciones WHERE n_personas_hb >= $cantidadPersonas";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }

    if (mysqli_num_rows($result) > 0) {
        // Habitaciones disponibles encontradas
        echo '<div class="popup">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<h3>Habitación: ' . $row['nombre_hb'] . '</h3>';
            echo '<p>Precio: $' . $row['precio_hb'] . '</p>';
            
            // Muestra la imagen de la habitación
            echo '<img src="' . $row['imagen_hb'] . '" alt="' . $row['nombre_hb'] . '">';
            
            echo '<br><br>';
        }
        echo '</div>';
    } else {
        // No se encontraron habitaciones que coincidan con la cantidad de personas
        echo "Lo siento, no tenemos habitaciones que puedan acomodar esa cantidad de personas.";
    }
}
?>
