<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E_EArt</title>
        <link rel ="stylesheet" href="inicioCSS.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function valueregistro(){
                alert("Se ha registrado el usuario correctamente");
                location.href = "E_E.php";
            }

        </script>
    </head>
    <body>
        <div class = "contenedor">
        <form method="$_POST" action="registrodb.php">
        <div class = "formulario">
            <div class = "titulo">
                <a href="E_E.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <div class = "imag">
                    <img src="Imagenes/logo1.png" alt="" height = "200px">     
                </div>  
                <h1>REGISTRO</h1>
                <h5>¿Tienes una cuenta?<a href="inicio.php"> INICIAR SESION</a></h5>
            </div>
            <div class = "inputs">
                <input type="text" name="Nombre" id="Nombre" placeholder = "Nombre">
                <input type="text" name="Apellido" id="Apellido" placeholder = "Apellido">
                <select name="TipoDocumento">
                <option value="1">Cedula de Ciudadania</option>
                <option value="2">Tarjeta De Identidad</option>
                <option value="3">Pasaporte</option>
                <option value="4">Cedula de Extranjeria</option>
                <option value="5">Pasaporte Extranjero</option>
                <option value="6">Visa</option>
                </select>
                <input type="text" name="NumeroDocumento" id="NumeroDocumento" placeholder = "Numero de documento">
                <input type="text" name="Direccion" id="Direccion" placeholder = "Direccion">
                <input type="text" name="Telefono" id="Telefono" placeholder = "Telefono">
                <input element type="email" name="Correo" id="Correo" placeholder = "Correo" class="correo">
                <input type="password" name="Contrasena" id="Contrasena" placeholder = "Contraseña">
                <select name="Ciudad_IdCiudad">
                <option value="1">Bogota</option>
                <option value="2">Medellin</option>
                </select>
            </div>
            <div class = "botones">
            <button class = "btn1" onclick="valueregistro()" input type="submit">
                Registrar
            </button>
                
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
                    <li><a href="file:///C:/Users/user/Documents/E_E/E_E.php">Inicio</a></li>
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
                <small>_copy; 2023 <b>Papeleria la Universidad</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>    
    </body>
</html>