<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "eyeart");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los valores ingresados por el usuario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Preparar la consulta SQL
$consulta = "INSERT INTO tabla_usuarios (nombre, email) VALUES ('$nombre', '$email')";

// Ejecutar la consulta
if (mysqli_query($conexion, $consulta)) {
    echo "Los datos se guardaron correctamente.";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>