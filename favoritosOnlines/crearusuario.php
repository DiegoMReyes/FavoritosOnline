<?php

session_start();

$contador = 0;




$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);

   $sql = "SELECT * FROM usuarios";

$peticion = mysql_query($sql); 


while($fila = mysql_fetch_array($peticion)){
    
    if($fila['usuario'] == $usuario){
        
        $contador++;
        
    }
    
}

mysql_close();




if($contador == 0){

$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);

       $sql = "INSERT INTO usuarios (usuario, contrasena,nombre, apellido, edad, permisos)
         VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad', 12)";

mysql_query($sql); 


mysql_close();



echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= index.php' > 
    
    </head>
</html>


";
      
}else{
    echo "El nombre de usuario que has seleccionado ya existe , intenta otra vez";
}

?>