<?php

?>
<html>
    <!DOCTYPE = "html">
    <head>
        <link rel="stylesheet" href="Catalogo.css">
        <title>E_E Art</title>
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>


            function cargar()
            {
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cardmas1').style.display = "block";
                document.getElementById('cardmas2').style.display = "block";
            }
            
            function cerrar() {
                alert("Se ha cerrado la sesion Correctamente");
                
            }

            function carrito(){
                document.getElementById('alertcar').style.display = "flex";
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


            function filtrarCuerpo(){
                document.getElementById('card1').style.display = "block";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "block";
                document.getElementById('card4').style.display = "none";
                document.getElementById('card5').style.display = "block";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "block";
                document.getElementById('card8').style.display = "block";
                document.getElementById('card9').style.display = "block";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "none";
                document.getElementById('cardmas2').style.display = "block";
                document.getElementById('alertpro').style.display = "none";
            }


            function filtrarFacial(){
                document.getElementById('card1').style.display = "block";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "block";
                document.getElementById('card4').style.display = "block";
                document.getElementById('card5').style.display = "none";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "block";
                document.getElementById('card8').style.display = "none";
                document.getElementById('card9').style.display = "block";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "block";
                document.getElementById('cardmas2').style.display = "block";
                document.getElementById('alertpro').style.display = "none";
            }


            function filtrarJabones(){
                document.getElementById('card1').style.display = "block";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "block";
                document.getElementById('card4').style.display = "none";
                document.getElementById('card5').style.display = "none";
                document.getElementById('card6').style.display = "block";
                document.getElementById('card7').style.display = "block";
                document.getElementById('card8').style.display = "block";
                document.getElementById('card9').style.display = "block";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "none";
                document.getElementById('cardmas2').style.display = "block";
                document.getElementById('alertpro').style.display = "none";
            }

            function filtrarAntibacteriales(){
                document.getElementById('card1').style.display = "none";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "none";
                document.getElementById('card4').style.display = "none";
                document.getElementById('card5').style.display = "block";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "none";
                document.getElementById('card8').style.display = "none";
                document.getElementById('card9').style.display = "none";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "none";
                document.getElementById('cardmas2').style.display = "none";
                document.getElementById('alertpro').style.display = "none";
            }

            function filtrarCremas(){
                document.getElementById('card1').style.display = "none";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "none";
                document.getElementById('card4').style.display = "block";
                document.getElementById('card5').style.display = "none";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "none";
                document.getElementById('card8').style.display = "none";
                document.getElementById('card9').style.display = "none";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "block";
                document.getElementById('cardmas2').style.display = "none";
                document.getElementById('alertpro').style.display = "none";
            }

            function filtrarVelas(){
                document.getElementById('card1').style.display = "none";
                document.getElementById('card2').style.display = "block";
                document.getElementById('card3').style.display = "none";
                document.getElementById('card4').style.display = "none";
                document.getElementById('card5').style.display = "none";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "none";
                document.getElementById('card8').style.display = "none";
                document.getElementById('card9').style.display = "none";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "none";
                document.getElementById('cardmas2').style.display = "none";
                document.getElementById('alertpro').style.display = "none";
            }

            function filtrarBelleza(){
                document.getElementById('card1').style.display = "none";
                document.getElementById('card2').style.display = "none";
                document.getElementById('card3').style.display = "none";
                document.getElementById('card4').style.display = "none";
                document.getElementById('card5').style.display = "none";
                document.getElementById('card6').style.display = "none";
                document.getElementById('card7').style.display = "none";
                document.getElementById('card8').style.display = "none";
                document.getElementById('card9').style.display = "none";
                document.getElementById('btnmas').style.display = "none";
                document.getElementById('cargar').style.display = "none";
                document.getElementById('cardmas1').style.display = "none";
                document.getElementById('cardmas2').style.display = "none";
                document.getElementById('alertpro').style.display = "block";
            }
            
            
            function esperar() {
            document.getElementById ('aa').style.display = "none";
            document.getElementById ('car').style.display = "block";
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
                    <a href="TipoPago.php">
                        <button class="btn-pedido" id="btn-pedido">
                            Confirmar Peido
                        </button>
                    </a>
                </div>
            </div>
        </div>


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
                    <a href ="cuenta.php">
                   <i class="fa-solid fa-user"></i>
                </a>
                </div>
                <div class = "inicio">
                    <a href ="index.php" onclick="cerrar()">
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
            <a href="index.php">Home</a> > <h4>Producto</h4> 
         </div>

    <div class = "catalogo">
        <div class = "filtro">
            <div class = "filtrar">
                <h2>FILTRAR POR</h2>
            </div>
            <div class = "Departamento">
                <h4>Departamento<br>
                <div class="checkon">
                    <input type="checkbox" class = "check" id="Cuerpo"  value="Cuerpo"  onclick="filtrarCuerpo()" />
                    <label for="Cuerpo">Cuerpo</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Facial"  value="Facial" onclick="filtrarFacial()"/>
                    <label for="Facial">Facial</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Velas"  value="Velas" onclick="filtrarVelas()"/>
                    <label for="Velas">Velas</label><br>
                </div>
                </h4>
            </div>
            <div class = "Categoria">
                <h4>Categoria<br>
                <div class="checkon">
                    <input type="checkbox" class = "check" id="Jabones"  value="Jabones" onclick="filtrarJabones()" />
                    <label for="Jabones">Jabones</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Antibacteriales"  value="Antibacteriales" onclick="filtrarAntibacteriales()" />
                    <label for="Antibacteriales">Antibacteriales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Cremas"  value="Cremas" onclick="filtrarCremas()"/>
                    <label for="Cremas">Cremas Corporales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Velas"  value="Velas" onclick="filtrarVelas()" />
                    <label for="Velas">Velas</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Belleza"  value="Belleza"  onclick="filtrarBelleza()"/>
                    <label for="Belleza">Belleza</label><br>
                </div>
                </h4>
            </div>
            <div class = "Sub-Categoria">
                <h4>Sub-Categoria<br>
                <div class="checkon">
                    <input type="checkbox" class = "check" id="glicerina"  value="glicerina" />
                    <label for="glicerina">Jabones de glicerina</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Bombas"  value="Bombas" />
                    <label for="Bombas">Bombas Efervescentes</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="JabonesFaciales"  value="JabonesFaciales" />
                    <label for="JabonesFaciales">Jabones Faciales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="JabonesCorporales"  value="JabonesCorporales" />
                    <label for="JabonesCorporales">Jabones Corporales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="CremasFaciales"  value="CremasFaciales" />
                    <label for="CremasFaciales">Cremas Faciales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="CremasCorporales"  value="CremasCorporales" />
                    <label for="CremasCorporales">Cremas Corporales</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="VelasAromaticas"  value="VelasAromaticas" />
                    <label for="VelasAromaticas">Velas Aromaticas</label><br>
                </div>
                <div class="checkon">
                    <input type="checkbox" id="Velasglicerina"  value="Velasglicerina" />
                    <label for="Velasglicerina">Velas de glicerina</label><br>
                </div>
                </h4>
            </div>



        </div>
           <div class = "cards">
                <div class = "card" id="card1">
                    <img src="Imagenes/producto1.jpg" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Glicerina Naranja </h2>
                        <h3>$62.000</h3>
                        <a href="Productos/Producto.php">
                        <button class = "btn1">
                            Comprar
                        </button>
                        </a>
                        <button class = "btn2" onclick="openpro1()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card2">
                    <img src="Imagenes/velas.png" alt="">
                    <div class = "info">
                        <h5>Velas</h5>
                        <h2>Velas de Manzanilla  </h2>
                        <h3>$8.500</h3>
                        <a href="Productos/Producto1.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro2()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card3">
                    <img src="Imagenes/producto4.jpg" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Glicerina Canendula </h2>
                        <h3>$67.000</h3>
                        <a href="Productos/Producto2.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro3()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                 <div class = "card" id="card4">
                    <img src="Imagenes/producto2.jpg" alt="" >
                    <div class = "info">
                        <h5>Cremas</h5>
                        <h2>Crema Facial </h2>
                        <h3>$16.500</h3>
                        <a href="Productos/Producto3.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro4()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card5">
                    <img src="Imagenes/producto3.jpg" alt="">
                    <div class = "info">
                        <h5>Antibacterial</h5>
                        <h2>Gel Antibacterial E_E Art </h2>
                        <h3>$19.000</h3>
                        <a href="Productos/Producto4.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro5()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card6">
                    <img src="Imagenes/jabones.png" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Corporal E_E Art  </h2>
                        <h3>$7.500</h3>
                        <a href="Productos/Producto5.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro6()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card7">
                    <img src="Imagenes/producto3.jpg" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Glicerina </h2>
                        <h3>$47.000</h3>
                        <a href="Productos/Producto6.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro7()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card8">
                    <img src="Imagenes/jabones.png" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Corporal Maracuya  </h2>
                        <h3>$9.500</h3>
                        <a href="Productos/Producto7.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro8()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "card" id="card9">
                    <img src="Imagenes/producto1.jpg" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Glicerina Cereza</h2>
                        <h3>$57.000</h3>
                        <a href="Productos/Producto8.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro9()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class="cargar" id="cargar">
                    <button class = "btnmas" id = "btnmas" onclick = "cargar()">
                        Ver mas Productos
                    </button>
                </div>
                <div class = "cardmas" id = "cardmas1">
                    <img src="Imagenes/producto2.jpg" alt="">
                    <div class = "info">
                        <h5>Cremas</h5>
                        <h2>Mascara De Carbon </h2>
                        <h3>$38.000</h3>
                        <a href="Productos/Producto9.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro10()">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <div class = "cardmas" id = "cardmas2">
                    <img src="Imagenes/producto3.jpg" alt="">
                    <div class = "info">
                        <h5>Jabones</h5>
                        <h2>Jabon Glicerina Mora</h2>
                        <h3>$57.000</h3>
                        <a href="Productos/Producto10.php">
                            <button class = "btn1">
                                Comprar
                            </button>
                            </a>
                        <button class = "btn2" onclick="openpro11()">
                            Agregar al carrito
                        </button>
                    </div>
        </div>
        <div class="no-productos"id="alertpro">
            !No se encontraron Productos que coincidan con su seleccion.
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
            <li><a href="Catalogo.php">Catalogo</a></li>
            <li><a href="">Servicios</a></li>
            <li><a href=""> Acerca de</a></li>
            <li><a href="Contacto.php"> Contacto</a></li>
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