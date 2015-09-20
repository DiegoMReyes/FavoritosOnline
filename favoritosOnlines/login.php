

<?php


session_start();

$usuario = "diego";
$contrasena = "diego";

$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);

$sql = "SELECT * FROM usuarios";

$resultado = mysql_query($sql);

while($fila = mysql_fetch_array($resultado)){
    
    $usuarios = $fila['usuario'];
    $contrasenas = $fila['contrasena'];
    
    if( $usuarios==$usuario &&  $contrasenas==$contrasena ){
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contrasena'] = $contrasena;
        
        
echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= crearproyecto.php' > 
    
    </head>
</html>


";
        
        
        
    }else{
     echo "No tienes ceuntas";
    }
    
    
}

?>