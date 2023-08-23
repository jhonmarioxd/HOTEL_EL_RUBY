<?php
// Establecer la conexión con la base de datos MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hotelruby";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$fecha_llegada = $_POST["fecha_llegada"];
$fecha_salida = $_POST["fecha_salida"];
$habitacion = $_POST["habitacion"];
$personas = $_POST["personas"];

// Crear la tabla si no existe
$sql_create_table = "CREATE TABLE IF NOT EXISTS reservas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha_llegada DATE NOT NULL,
    fecha_salida DATE NOT NULL,
    habitacion INT(3) NOT NULL,
    personas INT(3) NOT NULL
)";

if ($conn->query($sql_create_table) === FALSE) {
    echo "Error al crear la tabla: " . $conn->error;
}

// Insertar los datos en la tabla
$sql_insert_data = "INSERT INTO reservas (nombre, email, telefono, fecha_llegada, fecha_salida, habitacion, personas)
    VALUES ('$nombre', '$email', '$telefono', '$fecha_llegada', '$fecha_salida', $habitacion, $personas)";

if ($conn->query($sql_insert_data) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
