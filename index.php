<?php
/*Formas de imprimir texto*/
echo "<p>Formas de imprimir texto<p/>";

echo "forma 1";
print_r("forma 2");
print("forma 3");


echo "<hr/>";

/* TIPOS DE DATOS */
echo "<p>TIPOS DE DATOS<p/>";

$nombre= "Arom"; //string
$edad = 18;      //Int o ENTERO
$talla = 1.70;    // flotante o decimal
$programador = null; // valor nulo

echo "nombre:".$nombre." edad:".$edad." altura:". $talla." puesto:".$programador;

echo "<hr/>";
/* CONSTANTES*/
echo "<p> CONSTANTES<p/>";

$edad = 40;
echo $edad;

//uso de constante
define("NOMBRE", "Arom");
//imprimir constante
echo NOMBRE;


echo "<hr/>";
/* Valores Relacionales*/
echo "<p> Valores Relacionales<p/>";

$valorA = 10;
$valorB = 5;
if($valorA >$valorB){
    echo "el valor $valorA es mayor al valor de $valorB";
}


echo "<hr/>";
/*Funciones en php*/
echo "<p> Funciones en php<p/>";

function imprimirSaludo($nombre){
    //Rutimas (Instruciones)
    echo "Hola ".$nombre;
}

//llamar a la funcion
imprimirSaludo("Arom");

$hoy= date( "d - Y - m ");
echo $hoy;



echo "<hr/>";
/*BASE DE DATOS*/
echo "<p> conectar php con mysql<p/>";

$servidor ="localhost";
$usuario = "root";
$contraseña = "";


//seria como un if
try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);

/*}catch(){

}*/


?>