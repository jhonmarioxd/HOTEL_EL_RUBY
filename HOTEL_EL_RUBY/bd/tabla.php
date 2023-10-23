<?php

require_once('conexion_bd.php');

// Verifica si se ha enviado un formulario para actualizar el estado
if (isset($_POST['update_state'])) {
    $id = $_POST['id'];
    $newState = $_POST['new_state'];
    
    // Actualiza el estado en la base de datos
    $sqlUpdate = "UPDATE habitaciones SET activado = '$newState' WHERE id = $id";
    if ($conexion->query($sqlUpdate) === TRUE) {
        echo "El estado de la habitación se ha actualizado con éxito.";
    } else {
        echo "Error al actualizar el estado de la habitación: " . $conexion->error;
    }
}

// Consulta para obtener los datos de las habitaciones
$sql = "SELECT id, nombre_hb, activado FROM habitaciones";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Imprime los datos en una tabla y agrega un formulario para actualizar el estado
    echo "<table>";
    echo "<thead><tr><th>ID</th><th>Nombre</th><th>Estado</th><th>Acción</th></tr></thead>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_hb"] . "</td>";
        echo "<td>" . $row["activado"] . "</td>";
        echo "<td>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "<select name='new_state'>
                <option value='Activa' " . ($row["activado"] == 'Activa' ? 'selected' : '') . ">Activa</option>
                <option value='Inactiva' " . ($row["activado"] == 'Inactiva' ? 'selected' : '') . ">Inactiva</option>
              </select>";
        echo "<button type='submit' name='update_state'>Actualizar Estado</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron habitaciones en la base de datos.";
}

$conexion->close();
?>