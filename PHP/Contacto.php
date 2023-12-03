<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CONTACTENOS</title>
        <link rel ="stylesheet" href="CSS/Contacto.css">
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
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Catalogo.php">Productos</a>
                <ul class = "submenu">
                    <li><a href="Catalogo.php">Jabones</a></li>
                    <li><a href="Catalogo.php">Antibacterial</a></li>
                    <li><a href="Catalogo.php">Velas</a></li>
                    <li><a href="Catalogo.php">Cremas</a></li>
                    <li><a href="Catalogo.php">Belleza</a></li>
                </ul>
            <li><a href="">Servicios</a></li>
            <li><a href="">Acerca De</a></li>
            <li><a href="Contacto.php">Contacto</a></li>
            
        </ul>
    </li>
    </nav>

    <div class="contenedor-contacto">
    <div class = "contacto">
    <div class="titulo">
                <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <div class="imag">
                    <img src="Imagenes/logo1.png" alt="" height="200px">
                </div>
                    <h1>CONTACTO</h1>
                </div>
        <div>
        <div class="inputs">
            <div class = "grupo-input">
            <input type="text" placeholder="Nombres">
            <input type="number"placeholder="Telefono">
            </div>
            <input type="email"placeholder="E-mail" class = "largos-input">
            <textarea name="comentarios" rows="10" cols="30">Escribe aquí tus comentarios</textarea>
                <button class="btn-contacto" onclick="enviar()">
                    Enviar
                </button>
        </div>
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
