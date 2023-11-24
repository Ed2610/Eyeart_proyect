<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E_EArt</title>
        <link rel ="stylesheet" href="E_ECSS.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav>
            <ul class="buscador">   
                <div class="logo">
                    <a href="#">
                        <img src="Imagenes/logo2.png" alt="">                        
                    </a>
                </div>
                <li>
                    <input type="text" placeholder="Busca tu Producto..">
                </li>
                <div class = "iconos">
                    <div class = "inicio">
                        <a href ="inicio.php">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    </div>
                    <div class = "inicio">
                        <a href ="cerrar_s.php">
                        <i class="fa-solid fa-door-open"></i>
                    </a>
                    </div>
                </div>
            </ul>
            <ul class="menu">
                <li><a href="">Inicio</a></li>
                <li><a href="inicio.php">Productos</a>
                    <ul class = "submenu">
                        <li><a href="inicio.php">Jabones</a></li>
                        <li><a href="inicio.php">Antibacterial</a></li>
                        <li><a href="inicio.php">Velas</a></li>
                        <li><a href="inicio.php">Cremas</a></li>
                        <li><a href="inicio.php">Belleza</a></li>
                    </ul>
                <li><a href="inicio.php">Servicios</a></li>
                <li><a href="inicio.php">Acerca De</a></li>
                <li><a href="inicio.php">Contacto</a></li>
            </ul>
        </nav>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://i.ibb.co/N1fyz56/descarga-1.png" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
    </div>
    <div class="carousel-item">
    <img src="https://i.ibb.co/PWj3YDf/descarga-2.png" alt="Chicago" class="d-block" style="width:100%; height:900px">
    </div>
    <div class="carousel-item">
    <img src="https://saviajabones.co/sites/default/files/styles/cetiia-banner-1280_x_500/public/diapositivas/Banners%20Savia_Mesa%20de%20trabajo%201%20copia_0.png?itok=a9BVXv7Q" alt="New York" class="d-block" style="width:100%; height:900px">
    </div>
    <div class="carousel-item">
    <img src="https://i.ibb.co/6y1h3NJ/Captura-de-pantalla-2023-09-13-070340.png" alt="New York" class="d-block" style="width:100%; height:900px">
    </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
</div>
        <div class = "container-info box-start box-anim" id= "box1">
            <h1>Creamos y fabricamos productos naturales de higiene y cuidado personal de la más calidad.</h1>
            
            <h3>Nuestros productos están elaborados a base de aceites esenciales, extraídos por destilación extractos,
            aceites vegetales de prensado en frío: aceite de coco, jojoba, almendras, argán, ricino, caléndula, al igual que mantecas como la de karit,
            emulsionantes y conservantes eco certificados, glicerina vegetal, ceras vegetales, arcillas, flores como lavanda, rosas entre otros.
            </h3>
            
            <button class = "catalogo1">
                CATALOGO
            </button>
        </div>
        <div class = "slider-fotos">
            <ul class = "foto1"></ul>
            <ul class = "foto2"></ul>
        </div>

        <div id="container-cards-1" class ="container-cards cards-anim">
            <div class = "cards1">
                <div class = "ima">
                    <img src="https://eyeart.com.co/wp-content/uploads/2020/12/FeaturedProduct_INP-1399x2048-1-700x1024.jpg"alt="">
                </div>
                <div class = "contenido">
                    <h4><a>Jabones</h4></a>
                    <h3><a>Jabones de glicerina naranja</h3></a>
                    <h2>$62,000.00</h2>
                    <a href ="inicio.php">
                    <button class = "boton">
                        COMPRAR
                    </button>
                </a>
                </div>
            </div>
            <div class = "cards1">
                <div class = "ima">
                    <img src="https://eyeart.com.co/wp-content/uploads/2020/12/FeaturedProduct_EM-873x1278-1-699x1024.jpg"alt="">
                </div>
                <div class = "contenido">
                    <h4><a>Jabones</h4></a>
                    <h3><a>Jabones glicerina Calendula</h3></a>
                    <h2>$19,000.00</h2>
                    <a href ="inicio.php">
                        <button class = "boton">
                            COMPRAR
                        </button>
                    </a>
                </div>
            </div>
            <div class = "cards1">
                <div class = "ima">
                    <img src="https://eyeart.com.co/wp-content/uploads/2020/12/FeaturedProduct_LIT-1399x2048-1-700x1024.jpg"alt="">
                </div>
                <div class = "contenido">
                    <h4><a>Antibacterial</h4></a>
                    <h3><a>Gel Antibacterial Eye Art</h3></a>
                    <h2>$35,000.00</h2>
                    <a href ="inicio.php">
                        <button class = "boton">
                            COMPRAR
                        </button>
                    </a>
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="inicio.php">Catalogo</a></li>
                    <li><a href="inicio.php">Servicios</a></li>
                    <li><a href="inicio.php"> Acerca de</a></li>
                    <li><a href="inicio.php"> Contacto</a></li>
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

    <script>
        var box = document.getElementById("box1");
        box.addEventListener("animationend", setBox, false)

        function setBox(e)  {
            box.classList.add("box-end")
            box.classList.remove("box-anim")
        }

        var cards = document.getElementById("container-cards-1");
        cards.addEventListener("animationend", setCards, false)

        function setCards(e)  {
            cards.classList.add("cards-end")
            cards.classList.remove("cards-anim")
        }

    </script>
</html>    