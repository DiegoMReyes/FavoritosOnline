
<html>
  
    <head>
        <title>Login</title>
        <link href="diseno.scss" rel="stylesheet" />
    </head>
    

    
    
    <body>
        
         <header>
                     <h1> Favoritos Online</h1>
                     <p>Guarda tus lugares favoritos</p>
        </header>
        
        
        <table>   
        
        <form action="crearusuario.php" method="POST">
            <label>Usuario: </label>
            <input type="text" name="usuario" size="40" placeholder="Escribe tu nombre de usuario aqui"><br> 
            <label>Contraseña:</label>
            <input type="text" name="contrasena" size="40" placeholder="Escribe tu contraseña aqui"><br> 
            <label>Nombre: </label>
            <input type="text" name="nombre" size="40" placeholder="Escrbe tu nombre aqui"><br> 
            <label>Apellido:</label>
            <input type="text" name="apellido" size="40" placeholder="Escribe tu apellido aqui"><br> 
            <label>Edad:</label>
            <input type="number" min="1" max="100" name="edad" size="40" placeholder="Tu edad aqui">
            <br> 
            <input type="submit">
            
        </form>
   
        </table>    
        
    </body>  
   
</html>

<?php

?>
