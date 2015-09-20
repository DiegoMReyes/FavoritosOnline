<?php

session_start();

$conexion = mysql_connect("localhost", "diego", "diego");


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$sql = " DELETE FROM favorito  WHERE usuario = '$usuario' AND contrasena = '$contrasena' 
          AND titulo = '$titulo'  AND direccion = '$direccion'  AND categoria = '$categoria' 
          AND comentario = '$comentario'   AND valoracion = '$valoracion'     ";

mysql_select_db("favoritos", $conexion);

mysql_query($sql);



mysql_close();


echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= principal.php' > 
    
    </head>
</html>


";


?>