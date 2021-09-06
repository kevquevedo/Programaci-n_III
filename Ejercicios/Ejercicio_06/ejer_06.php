<?php
/*Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

$numeros = array();
$total = 0;

for($i = 0; $i < 5; $i++ )
{
    $numAux = rand(1,20);
    $numeros[$i] = $numAux;
}

foreach($numeros as $item)
{
    $total += $item;
    echo("Number $i es: $item<br/>");
}

$promedio = $total / 5;
echo("El promedio es: $promedio <br/>");
if($promedio == 6)
{
    echo("El promedio es igual a 6.");
}
else if($promedio > 6)
{
    echo("El promedio es mayor a 6.");
}
else
{
    echo("El promedio es menor a 6.");
}


?>