<html>
   
    <head>
        <title>Favoritos Online</title>
        <link href="tabla.css" rel="stylesheet" />
        
    </head>
    
    <body>
    
<?php



session_start();

$user= $_SESSION['usuario'];
$pass= $_SESSION['contrasena'];

echo "<span class='Este'> <a href='cerrarsesion.php'>Cerrar sesion </a>  </span>";

echo "Tu usuario es: ". $_SESSION['usuario'] .
        "<br>"
     ."Tu contraseña es: ". $_SESSION['contrasena'] ,"<br>";






$conexion = mysql_connect("localhost", "diego", "diego");

if(!$conexion){
    
    die("No se ha podido conectar: ".  mysql_error());
    
}

mysql_select_db("favoritos", $conexion);

$sql = "SELECT * FROM favorito WHERE usuario = '$user' AND contrasena='$pass'  ";

$peticion = mysql_query($sql);

echo " <table border = 1 width=100%>
       <tr>
       <td>Titulo</td>
       <td>Direccion</td>
       <td>Categoria</td>
       <td>Comentario</td>
       <td>Valoracion</td>
       <td></td>
       <td></td>
       </tr>
        ";





while($fila = mysql_fetch_array($peticion)){
    echo "<tr>
        
           <td>".$fila['titulo']."</td> ".
          " <td> ".$fila['direccion']." </td> ".
         " <td> ".$fila['categoria']."</td> ".
         " <td> ".$fila['comentario']."</td>  ".
         " <td> ".$fila['valoracion'].
            
            
         " <td><a href='eliminarfavorito.php?
           titulo=".$fila['titulo']."
           &direccion=".$fila['direccion']."
           &categoria=".$fila['categoria']."
           &comentario=".$fila['comentario']."
           &valoracion=".$fila['valoracion']."
         '>Eliminar</a></td>".  
            
            
         " <td><a href='formularioactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."
           &categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."
         '>Actualizar</a></td>".
         " </tr> "
        ;
}


echo "
<tr>
    <form action ='crearfavorito.php' method='POST'>
        <td><input type='text' name='titulo' </td>
        <td><input type='text' name='direccion' </td>
        <td><select name='categoria'>
            <option value='salud'>Salud</option>
            <option value='trabajo'>Trabajo</option>
            <option value='hoppy'>Hoppy</option>
            <option value='personal'>Personal</option>
            <option value='otros'>Otros</option>
        </td>
        <td><input type='text' name='comentario' </td>
        <td><input type='number' min='0' max='10' name='valoracion' </td>
        <td><input type='submit'</td>
        <td></td>
        
</tr>
";

echo "</table>";

mysql_close();



////

function tabla($encategoria){
    GLOBAL $user;
    
    echo " <br>
            <br>
            
          ";
    
echo " Algunos links de la categoria ".$encategoria." que te pueden interesar";



$conexio = mysql_connect("localhost", "diego", "diego");


mysql_select_db("favoritos", $conexio);

$sqlm = "SELECT * FROM favorito WHERE usuario!= '$user' AND categoria='$encategoria' ORDER BY favoritoID ";//ORDER BY RANDOM() LIMIT 3

$resultado = mysql_query($sqlm);

echo "  <table border = 1 width=100%>
       <tr>
       <td>Titulo</td>
       <td>Direccion</td>
       <td>Categoria</td>
       <td>Comentario</td>
       <td>Valoracion</td>
       
       </tr>

    ";


while($fila = mysql_fetch_array($resultado)){
    echo "<tr>
        
           <td>".$fila['titulo']."</td> ".
         " <td> ".$fila['direccion']." </td> ".
         " <td> ".$fila['categoria']."</td> ".
         " <td> ".$fila['comentario']."</td>  ".
         " <td> ".$fila['valoracion'].
       
         " </tr> "
        ;
}



echo "</table>";

mysql_close();
}


tabla("salud");
tabla("trabajo");
tabla("hoppy");
tabla("personal" );
tabla("Otros");

?>

        
    </body>
    
</html>