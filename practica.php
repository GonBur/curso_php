
<?php
        $contraseña1=$_POST["contraseña1"];
        $contraseña2=$_POST["contraseña2"];

        if($contraseña1 == $contraseña2){
            echo "contraseñas iguales";
        }else{
            echo "volver a ingresar contraseñas";
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
    <form action="practica.php" method="POST">
        contraseña
<input type="text" name="contraseña1">
<br>
contraseña
<input type="text" name="contraseña2">

<input type="submit">
    </form>
</body>
</html>