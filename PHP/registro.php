<?php
include_once 'conexion.php';

if (isset($_POST['registrar'])) {

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $numeroDocumento = $_POST['NumeroDocumento'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $contrasena = $_POST['Contrasena'];
    $TipoDocumento = $_POST['TipoDocumento'];
    $ciudad = $_POST['Ciudad_IdCiudad'];

    $validacion1 = $con->prepare('SELECT * FROM usuario WHERE Correo = :Correo OR NumeroDocumento = :NumeroDocumento');

    $validacion1->bindParam(':Correo', $correo);
    $validacion1->bindParam(':NumeroDocumento', $TipoDocumento);

    $validacion1->execute();

    $resultado_val = $validacion1->rowCount();

    if($resultado_val > 0){
        ?>
        <script>alert("El correo o el numero de documento ya existe, prueba con otro");</script>
        <?php
    }else{ 
    if (!empty($nombre) && !empty($apellido) && !empty($numeroDocumento) && !empty($telefono) && !empty($correo) && !empty($contrasena) && !empty($TipoDocumento) && !empty($ciudad)) {
        $consulta_agregar = $con->prepare('INSERT INTO usuario (Nombre, Apellido, NumeroDocumento, Direccion, Telefono, Correo, Contrasena, TipoDocumento_IdTipoDocumento, Ciudad_IdCiudad) VALUES (:Nombre, :Apellido, :NumeroDocumento, :Direccion, :Telefono, :Correo, :Contrasena, :TipoDocumento, :Ciudad)');
        $consulta_agregar->execute(array(
            ':Nombre' => $nombre,
            ':Apellido' => $apellido,
            ':NumeroDocumento' => (int)$numeroDocumento,
            ':Direccion' => $direccion, // Agregar dirección si es necesario
            ':Telefono' => (int)$telefono,
            ':Correo' => $correo,
            ':Contrasena' => md5($contrasena), // Aplicar md5 a la contraseña
            ':TipoDocumento' => $TipoDocumento,
            ':Ciudad' => (int)$ciudad,
        ));
        echo "Los datos se guardaron correctamente.";
        header('Location: index.php');
    } else {
        echo "<script> alert('Algunos de los campos está vacío');</script>";
    }
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>E&EArt</title>
    <link rel="stylesheet" href="inicioCSS.css">
    <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script>
        function valueregistro() {
            alert("Se ha registrado el usuario correctamente");
            location.href = "index.php";
        }
    </script>
</head>
<body>
<div class="contenedor">
    <div class="formulario">
        <div class="titulo">
            <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
            <div class="imag">
                <img src="Imagenes/logo1.png" alt="" height="200px">
            </div>
            <h1>REGISTRO</h1>
            <h5>¿Tienes una cuenta?<a href="inicio.php"> INICIAR SESION</a></h5>
        </div>
        <div class="inputs">
            <form method="post" action="">
                <div class = "contenedor-inputs">
                    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre" required>
                    <input type="text" name="Apellido" id="Apellido" placeholder="Apellido" required>
                </div>
                <div class = "contenedor-inputs">
                    <select name="TipoDocumento" required>
                        <option value="1">Cedula de Ciudadania</option>
                        <option value="2">Tarjeta De Identidad</option>
                        <option value="3">Pasaporte</option>
                        <option value="4">Cedula de Extranjeria</option>
                        <option value="5">Pasaporte Extranjero</option>
                        <option value="6">Visa</option>
                    </select>
                    <input type="text" name="NumeroDocumento" id="NumeroDocumento" placeholder="Numero de documento" required>
                </div>
                <div class = "contenedor-inputs">
                    <input type="text" name="Direccion" id="Direccion" placeholder="Direccion" required>
                    <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" required>
                </div>
                <div class = "contenedor-inputs">
                    <input type="email" name="Correo" id="Correo" placeholder="Correo" class="correo" required>
                    <input type="password" name="Contrasena" id="Contrasena" placeholder="Contraseña" required>
                </div>
                <div class = "contenedor-inputs">
                    <select name="Ciudad_IdCiudad" required>
                        <option value="1">Bogota</option>
                        <option value="2">Medellín</option>
                        <option value="3">Cali</option>
                        <option value="4">Barranquilla</option>
                        <option value="5">Cartagena</option>
                        <option value="6">Soacha</option>
                        <option value="7">Cúcuta</option>
                    </select>
                </div>
        </div>
        <div class="botones">
            <button class="btn1" type="submit" name="registrar" id="registrar">
                Registrar
            </button>
            </form>
        </div>
    </div>
</div>

<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="Imagenes/logo1.png" alt="Logo de la PapeleriaLaUniversidad">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Catalogo</a></li>
            <li><a href="">Servicios</a></li>
            <li><a href=""> Acerca de</a></li>
            <li><a href=""> Contacto</a></li>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Descubre la mejor calidad</p>
            <p>Suscribete a nuestras redes sociales</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.instagram.com/creacioneseeart/"> <i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://twitter.com/EEArt1"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>_copy; 2023 <b>EyeArt</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</body>
</html>
