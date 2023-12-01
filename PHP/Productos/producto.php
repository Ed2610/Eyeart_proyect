<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E&EArt</title>
        <link rel ="stylesheet" href="Producto.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function aparecerdesp(){
                document.getElementById('descripcion').style.display = "block";
                document.getElementById('especificacion').style.display = "none";
                document.getElementById('raya1').style.display = "block";
                document.getElementById('raya2').style.display = "none";
            }
            function cerrar() {
                alert("Se ha cerrado la sesion Correctamente");
                
            }

            function aparecerespe(){
                document.getElementById('descripcion').style.display = "none";
                document.getElementById('especificacion').style.display = "block";
                document.getElementById('raya1').style.display = "none";
                document.getElementById('raya2').style.display = "block";
            }

            function imagen(){
                document.getElementById('img1').style.display = "block";
                document.getElementById('img2').style.display = "none";
            }

            function imagen2(){
                document.getElementById('img1').style.display = "none";
                document.getElementById('img2').style.display = "block";
            }

            function carrito(){
                document.getElementById('alertcar').style.display = "flex";
            }

            function carritopro(){
                document.getElementById('alertcar').style.display = "flex";
                document.getElementById('pro1').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }

            function cardout(){
                
                document.getElementById('alertcar').style.display = "none";
                
            }

            //agregar carrito
            
            function openpro1(){
                document.getElementById('pro1').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }

            function openpro2(){
                document.getElementById('pro2').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro3(){
                document.getElementById('pro3').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro4(){
                document.getElementById('pro4').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro5(){
                document.getElementById('pro5').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro6(){
                document.getElementById('pro6').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro7(){
                document.getElementById('pro7').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro8(){
                document.getElementById('pro8').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro9(){
                document.getElementById('pro9').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro10(){
                document.getElementById('pro10').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }
            function openpro11(){
                document.getElementById('pro11').style.display = "flex";
                document.getElementById('cero').style.display = "none";
            }

            //eliminar productos carrito

            function outpro1(){
                document.getElementById('pro1').style.display = "none";
                document.getElementById('cero').style.display = "block";
            }

            function outpro2(){
                document.getElementById('pro2').style.display = "none";
            }
            function outpro3(){
                document.getElementById('pro3').style.display = "none";
            }
            function outpro4(){
                document.getElementById('pro4').style.display = "none";
            }
            function outpro5(){
                document.getElementById('pro5').style.display = "none";
            }
            function outpro6(){
                document.getElementById('pro6').style.display = "none";
            }
            function outpro7(){
                document.getElementById('pro7').style.display = "none";
            }
            function outpro8(){
                document.getElementById('pro8').style.display = "none";
            }
            function outpro9(){
                document.getElementById('pro9').style.display = "none";
            }
            function outpro10(){
                document.getElementById('pro10').style.display = "none";
            }
            function outpro11(){
                document.getElementById('pro11').style.display = "none";
            }

            


        </script>
    </head>
    <body>
        <div class="alert-opacity " id="alertcar">
            <div class = "carrito">
                <div class="encabezado">
                <div class="titulo-carrito">
                    Carrito de Compras
                </div>
                <div class="cerrar">
                    <i class="fa-solid fa-x" onclick="cardout()"></i>
                </div>
                </div>
                <div class="cero" id="cero">
                    No tienes Productos en el Carrito
                </div>
                <div class=" compra1" id="pro1">
                    <img src="Imagenes/producto1.jpg" alt="">
                    <div class="info">
                        Glicerina Naranja 
                    </div>
                    <div class="precio">
                        $67.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro1()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro2">
                    <img src="Imagenes/velas.png" alt="">
                    <div class="info">
                        Velas de Manzanilla 
                    </div>
                    <div class="precio">
                        $8.500
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro2()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro3">
                    <img src="Imagenes/producto1.jpg" alt="">
                    <div class="info">
                        Glicerina Canendula
                    </div>
                    <div class="precio">
                        $67.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro3()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro4">
                    <img src="Imagenes/producto2.jpg" alt="">
                    <div class="info">
                        Crema Facial
                    </div>
                    <div class="precio">
                        $16.500
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro4()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro5">
                    <img src="Imagenes/producto3.jpg" alt="">
                    <div class="info">
                        Gel Antibacterial
                    </div>
                    <div class="precio">
                        $19.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro5()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro6">
                    <img src="Imagenes/jabones.png" alt="">
                    <div class="info">
                        Jabon Corporal
                    </div>
                    <div class="precio">
                        $7.500
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro6()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro7">
                    <img src="Imagenes/producto4.jpg" alt="">
                    <div class="info">
                        Jabon Glicerina
                    </div>
                    <div class="precio">
                        $47.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro7()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro8">
                    <img src="Imagenes/jabones.png" alt="">
                    <div class="info">
                        Jabon Maracuya
                    </div>
                    <div class="precio">
                        $9.500
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro8()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro9">
                    <img src="Imagenes/producto3.jpg" alt="">
                    <div class="info">
                        Glicerina Cereza
                    </div>
                    <div class="precio">
                        $57.500
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro9()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro10">
                    <img src="Imagenes/producto2.jpg" alt="">
                    <div class="info">
                        Mascara Carbon
                    </div>
                    <div class="precio">
                        $38.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro10()"></i>
                    </div>
                </div>
                <div class=" compra1" id="pro11">
                    <img src="Imagenes/producto1.jpg" alt="">
                    <div class="info">
                        Glicerina Mora
                    </div>
                    <div class="precio">
                        $57.000
                        <input type="number" placeholder="1">
                    </div>    
                    <div class="icones">
                        <i class="fa-solid fa-x" onclick="outpro11()"></i>
                    </div>
                </div>
                <div class="subtotal">
                    <div class="total">
                        Total : $XX.XXX
                    </div>
                </div>
                <div class="boton-comprar">
                    <a href=""></a>
                    <a href="file:///C:/Users/Aprendiz/Documents/E&E/TipoPago.html">
                        <button class="btn-pedido" id="btn-pedido">
                            Confirmar Peido
                        </button>
                    </a>
                </div>
            </div>
        </div>


        <nav>
            <ul class="menu">
                <li><a href="file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html">Inicio</a></li>
                <li><a href="file:///C:/Users/user/Documents/E&E/file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html">Productos</a>
                    <ul class = "submenu">
                        <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Jabones</a></li>
                        <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Antibacterial</a></li>
                        <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Velas</a></li>
                        <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Cremas</a></li>
                        <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Belleza</a></li>
                    </ul>
                <li><a href="">Servicios</a></li>
                <li><a href="">Acerca De</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </li>
        </nav>
        <div class="buscador">   
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
                        <a href ="file:///C:/Users/Aprendiz/Documents/E&E/cuenta.html">
                       <i class="fa-solid fa-user"></i>
                    </a>
                    </div>
                    <div class = "inicio">
                        <a href ="file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html" onclick="cerrar()">
                        <i class="fa-solid fa-door-open"></i>
                    </a>
                    </div>
                    <div class = "inicio">
                    <a href ="#" onclick="carrito()">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    </div>
                    
                </div>
            </div>
        

        <div class = "recorrido">
           <a href="file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html">Home</a> > <a href="file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html"> Categoria</a>  >    <h4>Producto</h4> 
        </div>
        <div class="contenedor-producto">
            <div class="producto">
            <div class="select-imagen">
                <img src="Imagenes/producto1.jpg" alt="" onclick="imagen()">
                <img src="Imagenes/producto4.jpg" alt="" onclick="imagen2()">
            </div>
            <div class = "imagen">
                <img src="Imagenes/producto1.jpg" alt="" id="img1">
                <img src="Imagenes/producto4.jpg" alt="" id="img2" class="img2">
                
                
            </div>
            <div class="info-pro">
                <h5>Marca: E&E Art </h5><h5>Codigo: 001 </h5>
                <h1>JABON DE GLICERINA NARANJA</h1>
                <h3>$89.000</h3>
                <h2>$67.000</h2>
            <div class="botones">
                <button class="btn-carrito" onclick="openpro1()">
                    AGREGAR AL CARRITO
                </button>
                <button class="btn-comprar" onclick="carritopro()">
                    COMPRAR AHORA
                </button>
                <input type="number" placeholder="1">
            </div>
            </div>
        </div>
    </div>

    <div class = "contenedor-descripcion">
        <div class="sobre">
            <h1>SOBRE EL PRODUCTO</h1>
        </div>
        <div class="cat">
            <div class=" cat-descp" onclick="aparecerdesp()">
                <h3>DESCRIPCION</h3>
                <div class="raya1" id="raya1"></div>
            </div>
            <div class=" cat-espe" onclick="aparecerespe()">
                <h3>ESPECIFICACIONES</h3>
                <div class="raya2" id="raya2"></div>
            </div>
        </div>
        <div class="descripcion" id="descripcion">
            Nuestros productos están elaborados a base de aceites esenciales, 
            extraídos por destilación extractos, aceites vegetales de prensado en frío: aceite de coco,
             jojoba, almendras, argán, ricino, caléndula, al igual que mantecas como la de karit, emulsionantes y conservantes eco certificados,
              glicerina vegetal, ceras vegetales, arcillas, flores como lavanda, rosas entre otros. <br><br>

            <h4>Caracteristicas</h4><br><br>
            <li> Glicerina </li>
            <li> Naranja</li>
        </div>
        <div class="especificacion" id="especificacion">
           <div class = "contenido1">
            <div class=" cate">
                Garantia
            </div>
            <div class = "espe">
                90 Dias
            </div>
           </div>
        </div>
    </div>
    <div class="titulo">
        <h1>TAMBIEN TE PUEDE INTERESAR</h1>
        <div class="raya">
        </div>
    </div>
    <div class ="container-cards">
        <div class = "cards2">
            <div class = "ima">
            <img src="Imagenes/producto2.jpg"alt="">
        </div>
        <div class = "contenido">
            <h5>Cremas</h5>
            <h2>Crema Facial </h2>
            <h3>$16.500</h3>
       <a href="Producto3.html">
        <button class = "boton">
            COMPRAR
        </button>
        </a>
    
    </div>
    </div>
        <div class = "cards2">
            <div class = "ima">
            <img src="Imagenes/velas.png"alt="">
            </div>
            <div class = "contenido">
                <h5>Velas</h5>
                <h2>Velas de Manzanilla  </h2>
                <h3>$8.500</h3>
            <a href="Producto1.html">
        <button class = "boton">
            COMPRAR
        </button>
        </a>
        </div>
        </div>  
    
        <div class = "cards2">
        <div class = "ima">
        <img src="Imagenes/producto2.jpg"alt="">
        </div>
        <div class = "contenido">
            <h5>Jabones</h5>
            <h2>Jabon Glicerina Mora</h2>
            <h3>$57.000</h3>
        <a href="Producto10.html">
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
                <li><a href="file:///C:/Users/Aprendiz/Documents/E&E/Catalogo.html">Inicio</a></li>
                <li><a href="file:///C:/Users/user/Documents/E&E/Catalogo.html">Catalogo</a></li>
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
            <small>&copy; 2023 <b>E&E Art</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    </body>
</html>