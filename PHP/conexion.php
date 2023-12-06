<?php
   $server = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'eye';
   try {
    $con=new PDO('mysql:host=localhost;
    dbname='.$database,$username,$password,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

}catch (PDOException $e){
echo "Error en la conexion a la base de datos".$e->getMessage();
}
?>
