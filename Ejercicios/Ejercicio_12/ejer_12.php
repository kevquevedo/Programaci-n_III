<?php
/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/

function InvertirPalabra($palabraRecibida)
{   
    $auxiliar = str_split($palabraRecibida);//convierte de string a array.
    echo(gettype($auxiliar));//Retorna el tipo de variable.
    echo("<br/>"); 
    $retorno = array_reverse($auxiliar);//Da vuelta un array.
    $final = implode($retorno);//Convierte de array a string.
    echo(gettype($final));//Retorna el tipo de variable.
    echo("<br/>"); 
    return $final;
}

$palabra = "KEVIN";
$valor = InvertirPalabra($palabra);
echo($valor);




?>