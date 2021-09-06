<?php
/* 
Aplicación Nº 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
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


//Array indexado
$lapiceras = array($lapicera1, $lapicera2, $lapicera3);

$contador = 1;
foreach($lapiceras as $item)
{
    echo("LAPICERA $contador.<br/>");
    foreach($item as $key => $value)
    {
        echo("$key - $value<br/>");
    }
    $contador++;
}
echo("<br/>");
echo("ARRAY ASOCIATIVO");
echo("<br/>");
//Array asociativo
$lapics[0] = $lapicera1;
$lapics[1] = $lapicera2;
$lapics[2] = $lapicera3;

foreach($lapics as $key => $value)
{   
    $key++;
    echo("LAPICERA $key<br/>");
    foreach($value as $key => $value)
    {
        echo("$key - $value<br/>");
    }
}
?>