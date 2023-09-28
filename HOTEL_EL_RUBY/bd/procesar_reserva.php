<?php
// Establecer la conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hotel_el_ruby_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn) {
    echo'si se ha podido conectar la base de datos';
}
else{
    echo 'no se ha podido conectar la base de datos';
}

// Obtener los valores del formulario (asegúrate de que los nombres coincidan con los del formulario HTML)
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
    exit;
}

// Insertar los datos en la tabla (cambia "reservas" a "reservar" para que coincida con el nombre de la tabla que creaste)
$sql_insert_data = "INSERT INTO reservas (nombre, email, telefono, fecha_llegada, fecha_salida, habitacion, personas)
    VALUES ('$nombre', '$email', '$telefono', '$fecha_llegada', '$fecha_salida', '$habitacion', '$personas')";

if ($conn->query($sql_insert_data) === TRUE) {
    echo "Reserva realizada con éxito";
    session_start(); // Iniciar la sesión si no está iniciada
$_SESSION['mensaje_reserva'] = "Reserva realizada con éxito";
header("Location: reservar.html"); // Redirigir de vuelta a la página de reserva
// Verificar si la variable de sesión existe y mostrar el mensaje si es así
if (isset($_SESSION['mensaje_reserva'])) {
    echo '<div class="mensaje-reserva">' . $_SESSION['mensaje_reserva'] . '</div>';
    // Eliminar la variable de sesión después de mostrar el mensaje
    unset($_SESSION['mensaje_reserva']);
}
exit;
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
