<?php
session_start();

if (!isset($_SESSION['idUsuario'])) {
    header("Location: inicio.php");
    exit();
}

include_once('conexion.php');
$id = $_SESSION['idUsuario'];
$nnombre = $_SESSION['Nombre'];
$ccorreo = $_SESSION['Correo'];
$nndocu = $_SESSION['NumeroDocumento'];

// Validaciones y UPDATE
    if(!empty($_POST))
    {
        $alert="";
        if (!empty($_POST['Nombre']) && !empty($_POST['Apellido']) && !empty($_POST['NumeroDocumento']) 
        && !empty($_POST['Direccion']) && !empty($_POST['Telefono']) && !empty($_POST['Correo']) && !empty($_POST['TipoDocumento']) && !empty($_POST['Ciudad_IdCiudad'])) 
        {
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellido'];
            $numeroDocumento = $_POST['NumeroDocumento'];
            $direccion = $_POST['Direccion'];
            $telefono = $_POST['Telefono'];
            $correo = $_POST['Correo'];
            $TipoDocumento = $_POST['TipoDocumento'];
            $ciudad = $_POST['Ciudad_IdCiudad'];

            $validacion1 = $con->prepare('SELECT * FROM usuario WHERE (Correo = :Correo AND idUsuario != :id OR NumeroDocumento = :NumeroDocumento AND idUsuario != :id);');
            $validacion1->bindParam(':Correo', $correo);
            $validacion1->bindParam(':NumeroDocumento', $TipoDocumento);
            $validacion1->bindParam(':id',$id);
            $validacion1->execute();
            $resultado_val = $validacion1->rowCount();

            if($resultado_val > 0){
                ?>
                <script>alert("El correo o el numero de documento ya existen en la base de datos");</script>
                <?php
            }else{
                $Sql_Actualilzar = $con->prepare('UPDATE usuario SET Nombre = :Nombre, Apellido = :Apellido, Correo = :Correo, NumeroDocumento = :NumeroDocumento, Direccion = :Direccion, Telefono = :Telefono, Correo = :Correo, TipoDocumento_IdTipoDocumento = :TipoDocumento, Ciudad_IdCiudad=:Ciudad WHERE idUsuario =:id');
                $Sql_Actualilzar->execute(array(
                ':id'=>$id,
                ':Nombre'=>$nombre,
                ':Apellido'=>$apellido,
                ':Correo'=>$correo,
                ':NumeroDocumento'=>(int)$numeroDocumento,
                ':Direccion'=>$direccion,
                ':Telefono'=>(int)$telefono,
                ':TipoDocumento'=>$TipoDocumento,
                ':Ciudad'=>(int)$ciudad,
                ));

                if($Sql_Actualilzar){
                    ?>
                    <script>
                        alert("Se ha actualizado el usuario");
                    </script> 
                    <?php
                    $result = $con->query("SELECT Nombre, Correo, NumeroDocumento FROM usuario WHERE idUsuario={$id}");
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['Nombre'] = $row['Nombre']; 
                    $_SESSION['Correo'] = $row['Correo'];
                    $_SESSION['NumeroDocumento'] = $row['NumeroDocumento'];
                    
                    header("Location: cuenta.php");
                    exit; 
                }

            }

        }else{
        ?>
        <script>
            alert("Los campos no deben de estar vacios");
        </script>
        <?php
    }
    }
// Fin de Validaciones

$Sql = "SELECT u.IdUsuario, u.Nombre, u.Apellido, u.NumeroDocumento, u.Direccion, u.Telefono, u.Correo, u.TipoDocumento_idTipoDocumento, u.Ciudad_idCiudad 
        FROM usuario u 
        WHERE idUsuario = :id";
$estado = $con->prepare($Sql);
$estado->execute([':id'=> $id]);
$resultado = $estado->rowCount();

if($resultado === 0){
	?>
<script>alert("Se ha encontrado un error en la base de datos")</script>
<?php
}else{

while ($row = $estado->fetch(PDO::FETCH_ASSOC)) {

    $idusuarioO = $row['IdUsuario'];
    $nombreO = $row['Nombre'];
    $apellidO = $row['Apellido'];
    $numeroDO = $row['NumeroDocumento'];
    $direccionO = $row['Direccion'];
    $telfonoO = $row['Telefono'];
    $correoO = $row['Correo'];
    $tipodocu0 = $row['TipoDocumento_idTipoDocumento'];
    $ciudadO = $row['Ciudad_idCiudad'];

    }
}

/*Eliminar usuario*/
if(isset($_POST['btn-delete'])){
    $Sql_Consulta_E = $con -> prepare('SELECT * FROM usuario WHERE idUsuario = :id');
    $Sql_Consulta_E -> execute(array(
        ':id'=>$id,
    ));

    $resultado_E = $Sql_Consulta_E->rowCount();

    if($resultado_E === 0){
        ?>
        <script>alert("Se ha encontrado un error")</script>
        <?php
    }else{

        $Sql_Eliminar = $con -> prepare('DELETE FROM usuario WHERE idUsuario = :id');
        $Sql_Eliminar->execute(array(
            'id'=> $id,
        ));
        ?>
        <script>alert("Se ha eliminado su cuenta correctamente")</script>
        <?php
        include('cerrar_s.php');
    }
}
/*Fin de eliminar*/
?>


    

<html>
    <!DOCTYPE = "html">
    <head>
        <link rel="stylesheet" href="cuenta.css">
        <title>E_E Art</title>
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function cerrar() {
                alert("Se ha cerrado la sesion Correctamente");
            }

            function eliminar(){
                alert("Se ha eliminado la cuenta exitosamente");
            }

            function editar(){
                document.getElementById('vista').style.display = "none";
                document.getElementById('editar-perfil').style.display = "block";
                document.getElementById('cambiar-contra').style.display = "none";
            }

            function general(){
                document.getElementById('vista').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('cambiar-contra').style.display = "none";
            }

            function cambiar(){
                document.getElementById('cambiar-contra').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('vista').style.display = "none";
            }

            function guardar(){
                alert("Se ha guardado tus cambios");
            }

            function cambiar2(){
                alert("Se ha cambiado tus contraseña correctamente");
                document.getElementById('vista').style.display = "block";
                document.getElementById('editar-perfil').style.display = "none";
                document.getElementById('cambiar-contra').style.display = "none";
            }

        </script>
    </head>
    <body>
        <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Catalogo.html">Productos</a>
                <ul class = "submenu">
                    <li><a href="Catalogo.html">Jabones</a></li>
                    <li><a href="Catalogo.html">Antibacterial</a></li>
                    <li><a href="Catalogo.html">Velas</a></li>
                    <li><a href="Catalogo.html">Cremas</a></li>
                    <li><a href="Catalogo.html">Belleza</a></li>
                </ul>
            <li><a href="">Servicios</a></li>
            <li><a href="">Acerca De</a></li>
            <li><a href="">Contacto</a></li>
            
        </ul>
    </li>
    </nav>
    <div class="contenedor-cuenta">
        <div class="contenedor">
        <div class="menu2">
            <div class="imagen">
                <div class="imagen-perfil">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="general" onclick="general()">Vista General de la cuenta</div>
            <div class="editar" onclick="editar()">Editar Perfil</div>
            <div class="cambiar" onclick="cambiar()">Cambiar Contraseña</div>
            <div class="tarjetas">Tarjetas de Pago Guardadas</div>
            <div class="recibos">Recibos</div>
        </div>
        <div class="vista" id="vista">
            <h1>Vista general de la cuenta</h1>
            <h3>Perfil</h3>
        <div class="contenido">
            <div class="contenido-datos">
                <div class="nombre">
                    Nombre de usuario
                </div>
                <div class="datos">
                        <?php echo $nnombre ?>
                </div>
            </div>
            <div class="contenido-datos">
                <div class="correo">
                    Correo electronico
                </div>
                    <div class="datos">
                        <?php echo $ccorreo ?>
                    </div>
            </div>
            <div class="contenido-datos">
                <div class="id">
                    Tarjeta de identidad
                </div>
                <div class="datos">
                        <?php echo $nndocu?>
                </div>
          </div>
        </div>
            <button class="btn-editar" onclick="editar()">
                Editar Perfil
            </button>
            <form method="POST">
            <button class="btn-delete" name="btn-delete" onclick="eliminar()">
                Eliminar Cuenta
            </button>
            </form>
        <div class="cerrar-sesion">
            <h1>Cierra sesión</h1>
                 <h4>De esta manera, puedes cerrar tu sesión de tu cuenta en E_E Art en esta plataforma. </h4>
            <a href="cerrar_s.php">
            <button class="btn-cerrar" onclick="cerrar()">
                Cerrar Sesion
            </button>
             </a>
        </div>
        </div>
        <div class="editar-perfil" id = "editar-perfil">
            <h1>Editar Perfil</h1>
            <h3>Perfil</h3>
        <div class="contenido">
            <div class="contenido-editar">
            <form method="post" action="" class="formulario">
                <input type="text" name="Nombre" id="Nombre" placeholder="<?php echo $nombreO?>" value="<?php echo $nombreO?>" required>
                <input type="text" name="Apellido" id="Apellido" placeholder="<?php echo $apellidO?>" value="<?php echo $apellidO?>" required>
                <select name="TipoDocumento" required>
                    <option value="1" <?php if($tipodocu0== 1) echo 'selected';?>>Cedula de Ciudadania</option>
                    <option value="2" <?php if($tipodocu0== 2) echo 'selected';?>>Tarjeta De Identidad</option>
                    <option value="3" <?php if($tipodocu0== 3) echo 'selected';?>>Pasaporte</option>
                    <option value="4" <?php if($tipodocu0== 4) echo 'selected';?>>Cedula de Extranjeria</option>
                    <option value="5" <?php if($tipodocu0== 4) echo 'selected';?>>Pasaporte Extranjero</option>
                    <option value="6" <?php if($tipodocu0== 5) echo 'selected';?>>Visa</option>
                </select>
                <input type="text" name="NumeroDocumento" id="NumeroDocumento" placeholder="<?php echo $numeroDO?>" value="<?php echo $numeroDO?>" required>
                <input type="text" name="Direccion" id="Direccion" placeholder="<?php echo $direccionO?>" value="<?php echo $direccionO?>" required>
                <input type="number" name="Telefono" id="Telefono" placeholder="<?php echo $telfonoO?>" value="<?php echo $telfonoO?>" required>
                <input type="email" name="Correo" id="Correo" placeholder="<?php echo $nombreO?>" class="correo" value="<?php echo $correoO?>" required>
                <select name="Ciudad_IdCiudad" required>
                    <option value="1" <?php if($ciudadO== 1) echo 'selected'; ?>>Bogota</option>
                    <option value="2" <?php if($ciudadO== 2) echo 'selected'; ?>>Medellín</option>
                    <option value="3" <?php if($ciudadO== 3) echo 'selected'; ?>>Cali</option>
                    <option value="4" <?php if($ciudadO== 4) echo 'selected'; ?>>Barranquilla</option>
                    <option value="5" <?php if($ciudadO== 5) echo 'selected'; ?>>Cartagena</option>
                    <option value="6" <?php if($ciudadO== 6) echo 'selected'; ?>>Soacha</option>
                    <option value="7" <?php if($ciudadO== 7) echo 'selected'; ?>>Cúcuta</option>
                </select>
        </div>
                <h4>Sexo</h4>
                <select name="select">
                    <option value="value1">Masculino</option>
                    <option value="value2" >Femenino</option>
                    <option value="value3">Prefiero no decirlo</option>
                    <option value="value3">no binario</option>
                    <option value="value3">Otro</option>
                  </select>
                  <div class="fecha">
                    <h4>Fecha de Nacimiento</h4>
                    <input type="text" placeholder="11" class="dia">
                    <select name="select" class="mes">
                        <option value="value1">Enero</option>
                        <option value="value2" >Febrero</option>
                        <option value="value3">Marzo</option>
                        <option value="value4">Abril</option>
                        <option value="value5">Mayo</option>
                        <option value="value5">Junio</option>
                        <option value="value5">Julio</option>
                        <option value="value5">Agosto</option>
                        <option value="value5">Septiembre</option>
                        <option value="value5">Octubre</option>
                        <option value="value5">Noviembre</option>
                        <option value="value5">Diciembre</option>
                      </select>
                    <input type="text" placeholder="1990" class="ano">
                  </div>
        <div class="checkon">
            <input type="checkbox" class = "check"/>
            <label for="">Compartir mis datos de registro con los proveedores de E_E Art</label><br>
        </div>
            <button class="btn-cerrar" onclick="general()">
                Cancelar
            </button>
             <button class="btn-editar" onclick="guardar()" type="submit" name="Actualizar" id="Actualizar">
                Actualizar Perfil
            </button>
            </form>
        
        </div>
      </div>
      <div class="cambiar-contra" id = "cambiar-contra">
        <h1>Editar Perfil</h1>
        <h3>Perfil</h3>
    <div class="contenido">
        <div class="contenido-editar">
            <h4>Contraseña Actual</h4>
            <input type="password">
            <h4>Contraseña</h4>
            <input type="password">
            <h4>Confirmar Contraseña</h4>
            <input type="password">
    </div>
        <button class="btn-cerrar" onclick="general()">
            Cancelar
        </button>
         <button class="btn-cambiar" onclick="cambiar2()">
            Cambiar Contraseña
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