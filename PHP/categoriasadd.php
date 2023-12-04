<?php
include('conexion.php');
session_start();


/*if($_SESSION['rol'] !=1)
{
    header("location: cuenta.php")
}
*/

if (!empty($_POST))
{

    if (empty(($_POST['descripcion_c'])))
    {
        echo "<script>alert('Todos los campos son obligatorios'); window.location='categoriasadd.php';</script>";
    }else{

        $descripcion_c = $_POST['descripcion_c'];
        $productos_insert = $con->prepare('INSERT INTO categoria(Descripcion) VALUES(:descripcion_c);');
        $productos_insert -> execute(array(
            ':descripcion_c'=>$descripcion_c,
        ));

        if($productos_insert)
        {
            ?>
            <script>
                alert("Categoria registrada correctamente");
            </script>
            <?php
            header("location: agregar.php");
        }else{
            ?>
            <script>
                alert("Error al guardar la Categoria");
            </script>
            <?php
            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E_E Art/ Gestion Productos</title>
        <link rel ="stylesheet" href="productosaddCSS.css">
        <link rel="icon" href="Imagenes/logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color: #ebebeb;">
        <nav>
            <ul class="menu">
                <div class="offcanvas offcanvas-start" id="demo">
                    <div class="offcanvas-header" style="border-block-end: 1px solid rgb(3, 122, 13) ;">
                      <h1 class="offcanvas-title" >Administador</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body" style="padding: 0;">
                        <li class="submenu2"><a href="agregar.php">Inventario De Productos</a></li>
                        <li class="submenu2"><a href="productosadd.php">Productos De la Tienda</a></li>
                      <li class="submenu3" onclick="cerrar()"><a href="#">
                        Cerrar sesion
                    </a>
                      </li>
                    </div>
                  </div>
                    <li class="btn22" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        <i class="fa-solid fa-bars"></i>
                    </li>
            </ul>
        </li>
        </nav>
        <div class="contenedor">
        <div class="contenedor2">
            <div class="titulo">
                <form action="" method="POST">
               <a href="agregar.php"><i class="fa-solid fa-arrow-left"></i></a> <h1>Agregar Categoria</h1>
            </div>
            <div class="cardadd">
                <div>
                <h4>Descripcion Categoria:</h4>
                <textarea class="form-control" rows="7" id="descripcion_c" name="descripcion_c"></textarea>
                </div>
            </div>
            <button type="submit" class="btn_r" name="registrar_p" id="registrar_p" style="width: 100%;">
                Registrar categoria
                </button>
            </form>
         </div>
        </div>
    </body>
</html>