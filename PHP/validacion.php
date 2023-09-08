<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eyeart";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


// Cerrar la conexión
$conn->close();
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores ingresados por el usuario
    $email = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];

    // Validar los campos ingresados
    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor, ingresa tu email y contraseña.";
    } else {
        // Realizar la validación de la información en la base de datos
        // (Aquí deberías tener tu propio código para verificar la información en tu base de datos)

        // Si la validación es exitosa, iniciar sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: Catalogo.php");
        exit();
    }
}
?>

