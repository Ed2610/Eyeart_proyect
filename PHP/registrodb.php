<?php
// Establecer la conexión con la base de datos

$conexion = mysqli_connect("localhost", "root", "", "eyeart");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los valores ingresados por el usuario
$nombre = mysqli_real_escape_string($conexion, $_POST['Nombre']);
$apellido = mysqli_real_escape_string($conexion, $_POST['Apellido']);
$numeroDocumento = mysqli_real_escape_string($conexion, $_POST['NumeroDocumento']);
$telefono = mysqli_real_escape_string($conexion, $_POST['Telefono']);
$correo = mysqli_real_escape_string($conexion, $_POST['Correo']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['Contrasena']);
$TipoDocumento = mysqli_real_escape_string($conexion, $_POST['TipoDocumento']);
$ciudad = mysqli_real_escape_string($conexion, $_POST['Ciudad_IdCiudad']);

// Preparar la consulta SQL (corregir la tabla y los valores)
$consulta = "INSERT INTO usuario (Nombre , Apellido , NumeroDocumento , Telefono , Correo , Contrasena, TipoDocumento_idTipoDocumento , Ciudad_idCiudad) VALUES ('$nombre', '$apellido',$numeroDocumento,$telefono,'$correo','$contrasena',$TipoDocumento,$ciudad)";
// Ejecutar la consulta
if (mysqli_query($conexion, $consulta)) {
    echo "Los datos se guardaron correctamente.";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>