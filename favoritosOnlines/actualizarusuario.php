<?php

session_start();


$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$usuarioantiguo = $_SESSION['usuario'];

$sql = "UPDATE usuarios SET usuario='$usuario',contrasena='$contrasena',nombre='$nombre',apellido='$apellido',edad=$edad
         WHERE usuario='$usuarioantiguo'";

mysql_query($sql);

$sql = "UPDATE favorito SET usuario='$usuario',contrasena='$contrasena'
        WHERE usuario='$usuarioantiguo' ";

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