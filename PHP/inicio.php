<?php

session_start();

if (isset($_SESSION['idUsuario'])) {
    header("Location: cuenta.php");
    exit();
}

include_once('conexion.php');

if (isset($_POST['iniciar'])) {

    if (isset($_POST['Correo']) && isset($_POST['Contrasena'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Correo = validate($_POST['Correo']);
        $Contrasena = validate($_POST['Contrasena']);

        if (empty($Correo)) {
            ?>
            <script>alert("El Correo no debe de estar vacio")</script>
            <?php
            exit();
        } elseif (empty($Contrasena)) {
            ?>
            <script>alert("Ingresar contraseña")</script>
            <?php
            exit();
        } else {
            $Contrasena = md5($Contrasena);
            $Sql = "SELECT * FROM usuario WHERE Correo = '$Correo' AND Contrasena = '$Contrasena'";
            $resultado = $con->query($Sql);
            if ($resultado->rowCount() === 1) {
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                if ($row['Correo'] === $Correo && $row['Contrasena'] === $Contrasena) {
                    
                    $_SESSION['Correo'] = $row['Correo'];
                    $_SESSION['Nombre'] = $row['Nombre'];
                    $_SESSION['idUsuario'] = $row['idUsuario'];
                    $_SESSION['NumeroDocumento'] = $row['NumeroDocumento'];
                    ?>
                    <script>alert("Inicio Exitoso")
                    location.href = "index.php"</script>
                    <?php
                    exit();
                } else {
                    echo "<script> alert('Algunos de los campos está vacío'), location.href = 'inicio.php';</script>";
                exit();
                }
            } else {
                ?>
                <script>alert("El Correo o la clave son incorrectas")
                location.href = "inicio.php"</script>
                <?php
                exit();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>E_EArt</title>
    <link rel="stylesheet" href="inicioCSS.css">
    <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function cargar() {
            document.getElementById('aa').style.display = "none";
            document.getElementById('car').style.display = "block";
        }
    </script>
</head>
<body>
<div class="contenedor">
    <div class="formulario">
        <form method="POST" action="">
            <div class="titulo">
                <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <div class="imag">
                    <img src="Imagenes/logo1.png" alt="" height="200px">
                </div>
                <h1>INICIO SESION</h1>
                <h5>¿Todavía no tienes una cuenta?<a href="registro.php"> REGISTRARSE</a></h5>
            </div>
            <div class="inputs">
                <input name="Correo" type="text" id="Correo" placeholder="Correo" required>
                <input name="Contrasena" type="password" id="Contrasena" placeholder="Contraseña" required>
            </div>
            <div class="botones">
                <button name="iniciar" class="btn1" onclick="cargar()" input type="submit">
                    <div id="aa">Iniciar Sesion</div>
                    <div class="spinner-border" id="car" style="display:none"></div>
                </button>
                <a href="contraseña.php"><h5>¿HAS OLVIDADO TU CONTRASEÑA?</h5></a>
            </div>
        </form>
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
                <a href="https://www.instagram.com/creacioneseeart/"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://twitter.com/EEArt1"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>_copy; 2023 <b>Papeleria la Universidad</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</body>
</html>
