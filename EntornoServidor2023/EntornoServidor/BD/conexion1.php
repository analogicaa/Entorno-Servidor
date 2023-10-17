
<?php
$servername = "localhost"; // Nombre del servidor de base de datos
$username = "root";     // Nombre de usuario de la base de datos
$password = "";            // Contraseña del usuario
$database = "FP"; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
    // Aquí puedes realizar consultas y operaciones con la base de datos
    // Por ejemplo, $conn->query("SELECT * FROM tabla");
}

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>

