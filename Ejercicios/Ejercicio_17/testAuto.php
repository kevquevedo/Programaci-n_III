<?php
require "ejer_17.php";
/*
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
*/
$auto1 = new Auto("Fiat","Rojo");
$auto2 = new Auto("Fiat","Blanco");

$auto3 = new Auto("Renault","Azul", 150000.00);
$auto4 = new Auto("Renault","Azul", 180000.00);

$fecha = date_create('1994/09/23');
$auto5 = new Auto("Chery","Verde", 190000.00, $fecha);

/*
Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
*/

$auto3->AgregarImpuestos(1500.00);
$auto4->AgregarImpuestos(1500.00);
$auto5->AgregarImpuestos(1500.00);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto4);
Auto::MostrarAuto($auto5);

/*
Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
*/

$resultado = Auto::Add($auto1, $auto2);
echo("<br/>");
echo("El resultado de la suma es: $resultado");
echo("<br/>");

/*
Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
*/
if($auto1->Equals($auto2))
{
    echo("La comparacion del 1er Auto y del 2do Auto es: Verdadera");echo("<br/>");
}

if($auto1->Equals($auto5))
{
    echo("La comparacion del 1er Auto y del 5to Auto es: Verdadera");echo("<br/>");
}
else{
    echo("La comparacion del 1er Auto y del 5to Auto es: Falsa");echo("<br/>");
}

/*
Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)
*/
echo("<br/>");
Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto5);
echo("<br/>");


?>