<?php
// Establecer la conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hotelelruby";

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

// Verificar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)
if (empty($nombre) || empty($email) || empty($telefono) || empty($fecha_llegada) || empty($fecha_salida) || empty($habitacion) || empty($personas)) {
    echo "Todos los campos son obligatorios. Por favor, completa el formulario.";
    exit;
}

// Crear la tabla si no existe (si ya existe, esta línea no tiene efecto)
$sql_create_table = "CREATE TABLE IF NOT EXISTS reservar (
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
    exit;
}


// Insertar los datos en la tabla
$sql_insert_data = "INSERT INTO reservas (nombre, email, telefono, fecha_llegada, fecha_salida, habitacion, personas)
    VALUES ('$nombre', '$email', '$telefono', '$fecha_llegada', '$fecha_salida', '$habitacion', '$personas')";

if ($conn->query($sql_insert_data) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
phpinfo();
// Cerrar la conexión
$conn->close();
?>
