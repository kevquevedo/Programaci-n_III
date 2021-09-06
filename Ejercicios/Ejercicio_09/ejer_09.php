<?php
/*
Aplicación Nº 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/

//Lapicera 1
$lapicera1["Color"] = "Azul";
$lapicera1["Marca"] = "Bic";
$lapicera1["Trazo"] = 2;
$lapicera1["Precio"] = 29.50;
//Lapicera 2
$lapicera2["Color"] = "Roja";
$lapicera2["Marca"] = "FaberCastell";
$lapicera2["Trazo"] = 5;
$lapicera2["Precio"] = 55.00;
//Lapicera 3
$lapicera3["Color"] = "Negra";
$lapicera3["Marca"] = "KevinBic";
$lapicera3["Trazo"] = 1;
$lapicera3["Precio"] = 103.5;

//Impresion lapicera 1
echo("LAPICERA 1<br/>");
foreach($lapicera1 as $key => $valor)
{
    echo("$key = $valor<br/>");
}
//Impresion lapicera 2
echo("<br/>LAPICERA 2<br/>");
foreach($lapicera2 as $key => $valor)
{
    echo("$key = $valor<br/>");
}
//Impresion lapicera 3
echo("<br/>LAPICERA 3<br/>");
foreach($lapicera3 as $key => $valor)
{
    echo("$key = $valor<br/>");
}

?>