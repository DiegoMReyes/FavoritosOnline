<?php

session_start();


$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);


$tituloantiguo = $_SESSION['titulo'];

$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];$tituloantiguo = $_SESSION['titulo'];

$sql = "UPDATE favorito SET titulo='$titulo',direccion='$direccion',categoria='$categoria',comentario='$comentario',valoracion=$valoracion
         WHERE titulo='$tituloantiguo'";

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