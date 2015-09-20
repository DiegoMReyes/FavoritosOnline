<?php

$conexion = mysql_connect("localhost", "diego", "diego");

if(!$conexion){
    
    die("No se ha podido conectar: ".  mysql_error());
    
}



/*




mysql_select_db("favoritos", $conexion);


$sql = "CREATE TABLE favorito(
favoritoID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(favoritoID),
usuario varchar(40) Not Null,
contrasena varchar(40) Not Null,
titulo varchar(40) Not Null,
direccion varchar(100) Not null,
categoria varchar(20),
comentario varchar(200),
valoracion Int

)";

mysql_query($sql, $conexion);

mysql_close($conexion);
*/


/*
mysql_select_db("favoritos", $conexion);

$sql = "INSERT INTO favorito (usuario, contrasena, titulo, direccion, categoria, comentario, valoracion)
                             VALUES ('diego','diego','Fcaebook','www.facebook.com','Red Social','Este es facebook es chevre',10)";

mysql_query($sql);



mysql_close();

*/


mysql_select_db("favoritos", $conexion);


$sql = "CREATE TABLE usuarios(
usuarioID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(usuarioID),
usuario varchar(40) Not Null,
contrasena varchar(40) Not Null,
nombre varchar(40) Not Null,
apellido varchar(40) Not null,
edad Int(20),
permisos Int

)";

mysql_query($sql, $conexion);

mysql_close($conexion);


$conexio = mysql_connect("localhost", "diego", "diego");

if(!$conexio){
    
    die("No se ha podido conectar: ".  mysql_error());
    
}


mysql_select_db("favoritos", $conexio);

$sql = "INSERT INTO usuarios (usuario, contrasena, nombre, apellido, edad, permisos)
                             VALUES ('diego','diego','Mauricio','Acosta',18,10)";

mysql_query($sql);



mysql_close();


?>