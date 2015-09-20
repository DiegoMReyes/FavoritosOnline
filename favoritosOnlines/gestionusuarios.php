<?php

session_start();

$codigo = $_SESSION['permisos'];

if($codigo == 10){

$user= $_SESSION['usuario'];
$pass= $_SESSION['contrasena'];

echo "Tu usuario es: ". $_SESSION['usuario'] .
        "<br>"
     ."Tu contraseña es: ". $_SESSION['contrasena'] ,"<br>";

$conexion = mysql_connect("localhost", "diego", "diego");

if(!$conexion){
    
    die("No se ha podido conectar: ".  mysql_error());
    
}

mysql_select_db("favoritos", $conexion);

$sql = "SELECT * FROM usuarios ";

$peticion = mysql_query($sql);

echo " <table border = 1 width=100%>
       <tr>
       <td>Usuario</td>
       <td>Contraseña</td>
       <td>Nombre</td>
       <td>Apellido</td>
       <td>Edad</td>
       <td></td>
       <td></td>
       </tr>
        ";


while($fila = mysql_fetch_array($peticion)){
    echo "<tr>
        
           <td>".$fila['usuario']."</td> ".
         " <td> ".$fila['contrasena']." </td> ".
         " <td> ".$fila['nombre']."</td> ".
         " <td> ".$fila['apellido']."</td>  ".
         " <td> ".$fila['edad'].
            
            
         " <td><a href='eliminarusuario.php?
           usuario=".$fila['usuario']."
           &contrasena=".$fila['contrasena']."
           &nombre=".$fila['nombre']."
           &apellido=".$fila['apellido']."
           &edad=".$fila['edad']."
         '>Eliminar</a></td>".  
            
            
         " <td><a href='formularioactualizarusuario.php?
           usuario=".$fila['usuario']."
           &contrasena=".$fila['contrasena']."
           &nombre=".$fila['nombre']."
           &apellido=".$fila['apellido']."
           &edad=".$fila['edad']."
         '>Actualizar</a></td>".
         " </tr> "
        ;
}


echo "
<tr>
    <form action ='crearusuario.php' method='POST'>
        <td><input type='text' name='usuario' </td>
        <td><input type='text' name='contrasena' </td>
        <td><input type='text' name='nombre' </td>
        <td><input type='text' name='apellido' </td>
        <td><input type='text' name='edad' </td>
        <td><input type='submit'</td>
        <td></td>
        
</tr>
";

echo "</table>";

mysql_close();

}else{
    echo "Tu no eres administrador";
    
}

?>
