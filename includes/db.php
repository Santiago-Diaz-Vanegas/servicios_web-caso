<?php
// Conexión a la nueva base de datos
$host = 'localhost';
$db = 'AA5_EV01';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

