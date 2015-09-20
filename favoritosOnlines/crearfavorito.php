<?php

session_start();

$usuario = $_SESSION['usuario'] ;
$contrasena = $_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion= $_POST['valoracion'];

//conexion

$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);


$sql = "INSERT INTO favorito (usuario, contrasena, titulo, direccion, categoria, comentario, valoracion)
                             VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario',$addvaloracion)";

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
