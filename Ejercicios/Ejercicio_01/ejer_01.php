<?php
/*Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.*/

$limite = 1000;
$acumulador = 0;
$contador = 0;

echo("Suma: ");
for($i = 0; $acumulador + $i <= $limite; $i++){
    echo("$i ;");
    $acumulador += $i;
    $contador++;
}
echo("<br/>");
echo("Se sumaron $contador números.")


?>