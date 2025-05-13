<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Luego sigue tu código
$servername = "localhost";
$username = "root";
$password = "";
$database = "dunder_mifflin";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>

