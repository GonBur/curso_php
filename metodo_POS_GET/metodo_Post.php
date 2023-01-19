<?php

if($_POST){

//recibir informacion del formulario html (Metodo POST)
 $nombre=$_POST["nombre"];
 
 echo $nombre;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="codigo_html.php" method="POST">

Nombre:
<input type="text" name="nombre">

<input type="submit" value="Enviar">
</form>

</body>
</html>