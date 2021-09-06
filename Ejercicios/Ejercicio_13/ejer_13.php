<?php
/*
Aplicación Nº 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.

*/

function ValidarPalabra($palabra, $maxCaracter)
{
    $palabrasValidas = array("Recuperatorio","Parcial","Programacion");
    $retorno = 0;
    if(strlen($palabra) <= $maxCaracter )
    {
        foreach($palabrasValidas as $item)
        {
            if($item == $palabra)
            {
                $retorno = 1;
                break;
            }
        }
    }
    return $retorno;
}


$palabraAProcesar = "Parcial";
$resultado = ValidarPalabra($palabraAProcesar, 10);
echo("El resultado es: $resultado");



?>