<?php


session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];


$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);

$sql = "SELECT * FROM favorito WHERE usuario = '$usuario' AND contrasena = '$contrasena' 
          AND titulo = '$titulo'  AND direccion = '$direccion'  AND categoria = '$categoria' 
          AND comentario = '$comentario'   AND valoracion = '$valoracion' ";

$peticion = mysql_query($sql);




echo " <table border = 1 width=100%>
       <tr>
       <td>Titulo</td>
       <td>Direccion</td>
       <td>Categoria</td>
       <td>Comentario</td>
       <td>Valoracion</td>
       <td></td>
       </tr>
        ";

while($fila = mysql_fetch_array($peticion)){
    
    echo "
<tr>
    <form action ='actualizarfavorito.php' method='POST'>
        <td><input type='text' name='titulo' value=".$fila['titulo']."></td>
        <td><input type='text' name='direccion'  value=".$fila['direccion']."> </td>
        <td><select name='categoria'>
            <option value='salud'>Salud</option>
            <option value='trabajo'>Trabajo</option>
            <option value='hoppy'>Hoppy</option>
            <option value='personal'>Personal</option>
            <option value='otros'>Otros</option>
            <option value=".$fila['categoria']." selected>".$fila['categoria']." </option>
        </td>
        <td><input type='text' name='comentario'  value=".$fila['comentario']."></td>
        <td><input type='text' name='valoracion'  value=".$fila['valoracion']."></td>
        <td><input type='submit'</td>
        
        
</tr>
";
    
    
}

mysql_close();

$_SESSION['titulo'] = $titulo;





?>