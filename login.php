<?php
// Incluir el archivo de conexión a la base de datos
include 'includes/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Consultar la base de datos para verificar el usuario
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

// Verificar los resultados de la consulta
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($password, $row['password'])) {
        echo "<script>alert('Bienvenido $username'); window.location.href='index.html';</script>";
    } else {
        echo " Error en la autenticación: Contraseña incorrecta.";
    }
} else {
    echo " Error en la autenticación: Usuario no encontrado.";
}

$conn->close();
?>
