<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Papeleria La Universidad</title>
        <link rel ="stylesheet" href="CSS/inicioCSS.css">
        <link rel="icon" href="Captura_de_pantalla_2023-06-05_162930-removebg-preview.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class = "contenedor">
        <div class = "formulario">
            <div class = "titulo">
                <a href="inicio.php"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <div class = "imag">
                <img src="Imagenes/logo1.png" alt="" height = "200px">     
                </div>
                <h1>RECUPERAR CONTRASEÑA</h1>
                <h5>Te enviaremos un correo para recuperar la contraseña</h5>
            </div>
            <div class = "inputs">
                <input type="text" name="" id="usuario" placeholder = "Email">
            </div>
            <div class = "botones">
            <button class = "btn1" id="btn1" onclick = "login()" >
                Enviar
            </button>
            </div>
            <script>
                 

                    function login(){
                       
                        
                            alert("Instrucciones enviadas al correo exitosamente");
                        }
                    
            </script>
        </div>
        </div>

        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="Imagenes/logo1.png" alt="LogoE_E">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
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
