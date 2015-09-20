<?php

session_start();

$conexion = mysql_connect("localhost", "diego", "diego");


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

$sql = " DELETE FROM usuarios  WHERE usuario='$usuario' AND contrasena = '$contrasena' 
          AND nombre = '$nombre'  AND apellido = '$apellido'  AND edad = '$edad'   ";

mysql_select_db("favoritos", $conexion);

mysql_query($sql);

$sql = "  DELETE FROM favorito  WHERE usuario='$usuario' AND contrasena = '$contrasena'   ";

mysql_query($sql);


mysql_close();


echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= gestionusuarios.php' > 
    
    </head>
</html>


";


?>
