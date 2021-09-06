<?php	
/*Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach*/

$numImpares = array();
$contador = 0;

for($i = 1; $contador < 10; $i++)
{ 
    if( ($i % 2) != 0 )
    { 
        $numImpares[$contador] = $i;
        $contador++;
    }
}

echo("IMPRESION CON FOR<br/>");
for($i = 0; $i < 10 ; $i++)
{
    echo("El número: $numImpares[$i]<br/>");
}
echo("IMPRESION CON FOREACH<br/>");
foreach($numImpares as $item)
{
    echo("El número: $item<br/>");
}
echo("IMPRESION CON WHILE<br/>");
$index = 0;
while($index < 10)
{
    echo("El número: $numImpares[$index]<br/>");
    $index++;
}


?>