<?php
$servername = "localhost"; // Nombre del servidor de base de datos
$username = "root";     // Nombre de usuario de la base de datos
$password = "";            // Contraseña del usuario
$database = "INMO"; // Nombre de la base de datos

// CREAR CONEXIÓN
$conn = new mysqli($servername, $username, $password, $database);

// VERIFICAR CONEXIÓN
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error)."<br>"; 
} else {
    echo "Conexión exitosa"."<br>";
}

?>