<?php


session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];


$conexion = mysql_connect("localhost", "diego", "diego");

mysql_select_db("favoritos", $conexion);

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena' 
          AND nombre = '$nombre'  AND apellido = '$apellido'  AND edad = '$edad' ";

$peticion = mysql_query($sql);

mysql_close();


echo " <table border = 1 width=100%>
       <tr>
       <td>Usuario</td>
       <td>Contraseña</td>
       <td>Nombre</td>
       <td>Apellido</td>
       <td>Edad</td>
       <td></td>
       </tr>
        ";

while($fila = mysql_fetch_array($peticion)){
    
    echo "
<tr>
    <form action ='actualizarusuario.php' method='POST'>
        <td><input type='text' name='usuario' value=".$fila['usuario']."></td>
        <td><input type='text' name='contrasena'  value=".$fila['contrasena']."> </td>
        <td><input type='text' name='nombre'  value=".$fila['nombre']."> </td>
        <td><input type='text' name='apellido'  value=".$fila['apellido']."></td>
        <td><input type='text' name='edad'  value=".$fila['edad']."></td>
        <td><input type='submit'</td>
        
        
</tr>
";
    
    
}

$_SESSION['usuario'] = $usuario;





?>

