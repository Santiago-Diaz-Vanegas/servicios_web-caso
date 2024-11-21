<?php
// Incluir el archivo de conexión a la base de datos
include 'includes/db.php';

// Obtener datos del formulario
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertar datos en la tabla de usuarios
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

// Verificar si la inserción fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Usuario registrado exitosamente'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
