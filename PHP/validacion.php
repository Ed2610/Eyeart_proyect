<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'eye';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


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

