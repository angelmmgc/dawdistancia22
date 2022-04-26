<html>
        <head>
        </head>

        <body>
        <form id="form" method="post" action="practica-Martin.php">
                nombre : <input type="text" name="nombre"/>
                <br><br>
                apellidos : <input type="text" name="apellido"/>
                <br><br>
                cual es tu modulo favorito : <input type="text" name="modulo"/>
                <br><br>
                <input type="submit" value="enviar"/>
        </form>
        </body>




</html>

<?php
/*
*funcion que muestra un saludo.
*@author angel martin moreno
*@version 0
*@internal. esta funcion muestra un saludo con el nombre y el apellido de los c>
*@param $nombre. string .guarda el nombre
*@param $apellido. string.guarda el apellido.
*@return type void.
*/


function saludo($nombre,$apellido){

        return "<h1>HOLA MUNDO SOY  {$nombre} {$apellido}</h1>";
}



//guardamos en las variables los datos de los campos de texto
        $nombre= $_POST['nombre'];
        $apellido=$_POST['apellido'];
       
//ejecutamos las funciones
        echo saludo($nombre,$apellido);

?>
