
<?php
include 'validacion.php' 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E_EArt</title>
        <link rel ="stylesheet" href="inicioCSS.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            /*
            function login(){
                let usuario = document.getElementById("usuario").value;
                let password = document.getElementById("password").value;
                if(usuario == "Camilo11" && password == "Camilo22"){
                    location.href = "Catalogo.php"
                        alert("Bienvenido: "+usuario);
                }else if(usuario == "EduardoBalza" && password == "1234"){
                    location.href = "agregar.php"
                    alert("Bienvenido: "+usuario);
                }else{
                    alert("Usuario o contraseña incorrecta"+"\n"+"Intente de nuevo");
                }
            }
            */
    </script>
    </head>
    <body>
        <div class = "contenedor">
        <div class = "formulario">
        <form method="$_POST" action="validar.php">
            <div class="titulo">
                <a href="E_E.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <div class="imag">
                <img src="Imagenes/logo1.png" alt="" height="200px">     
                </div>
                <h1>INICIO SESION</h1>
                <h5>¿Todavía no tienes una cuenta?<a href="registro.php"> REGISTRARSE</a></h5>
            </div>
            <div class = "inputs">
                <select name="select" class="tipoDoc">
                    <option value="value1">Cliente</option>
                    <option value="value2" >Administrador</option>
                  </select>
                <input type="text" id="usuario" placeholder = "Usuario">
                <input type="password"  id="contrasena" placeholder = "Contraseña">
            </div>
            <div class = "botones">
            <button class = "btn1"  onclick="login()" input type="submit">
                Iniciar Sesion
            </button>
                <a href="contraseña.php"><h5>¿HAS OLVIDADO TU CONTRASEÑA?</h5></a>
            </div>
        </div>
        </form>
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