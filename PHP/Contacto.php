<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CONTACTENOS</title>
        <link rel ="stylesheet" href="Contacto.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script>
    function enviar(){
        alert("Se ha enviado la informacion correctamente")
    }
   </script>
    </head>
    <body>
        <nav>
            <ul class="buscador">   
                <div class="logo">
                    <a href="index.php">
                        <img src="Imagenes/logo2.png" alt="">                        
                    </a>
                </div>
                <li>
                 
                </li>
                <div class = "iconos">
                    <div class = "inicio">
                        <a href ="inicio.html">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    </div>
                    <div class = "inicio">
                        <a href ="registro.html">
                        <i class="fa-solid fa-door-open"></i>
                    </a>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="regreso">
            <a href="Catalogo.html"><img src="https://cdn-icons-png.flaticon.com/512/2722/2722837.png"width="50px" height="50px"alt=""/></a>
        </div>
    <div class="contenedor-contacto">
    <div class = "contacto">
            <center><img src="imagenes/logo1.png" width="200"height="200"alt=""/></center>
        
        <div class="formulario">
            <center ><h1>Contáctate Con Nosotros</h1></center>
        </div>
        
        <div class="formulario">
            <center><h4>Ingresa tu Nombre*</h4></center>
        </div>
        <div class="formulario">
            <center ><input type="text" placeholder="Nombres"></center>
        </div>
        <div class="formulario">
            <center><h4>Ingresa un numero de contacto*</h4></center>
        </div>
        <div class="formulario">
            <center><input type="number"placeholder="Telefono"></center>
        </div>
        <div class="formulario">
            <center><h4>Ingrese correo electronico*</h4></center>
        </div>
        <div class="formulario">
            <center><input type="email"placeholder="E-mail"></center>
        </div>
        <div class="formulario">
            <center><h4>Escriba comentarios o sugerencias*</h4></center>
        </div>
        <div class="formulario">
            <center><input type="text"placeholder="Comentarios..."></center>
        </div>
            <br>
            <center><button class="btn-contacto" onclick="enviar()">
                Enviar
            </button></center>
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
                <li><a href="Catalogo.html">Catalogo</a></li>
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
            <small>_copy; 2023 <b>E_E Art</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>    
    </body>
        
    
</html>