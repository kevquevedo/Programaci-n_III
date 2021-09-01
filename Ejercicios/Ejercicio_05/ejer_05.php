<?php
/*Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.*/

$decena = array(2=>"Veinti",3=>"Treinta", 4=>"Cuarenta",5=>"Cincuenta",6=>"Sesenta");
$unidad = array(1=>"uno", 2=>"dos", 3=>"tres",4=>"cuatro",5=>"cinco",6=>"seis",7=>"siete",8=>"ocho",9=>"nueve");

$num = random_int(20,60);
$numStr = (string)$num;

echo ("Número: $num // Escrito: ");

//Tratamiento especial del 20.
if($numStr == "20")
{
    echo ("Veinte");
}
else //Tratamiento de los demás numeros.
{
    //Calculo de decena
    foreach($decena as $n => $valor){

        if($n == $numStr[0])
        {
            echo ("$valor");
            break;
        }
    }
    //Calculo de unidad
    foreach($unidad as $n => $valor){

        if($numStr[0] == "2")
        {
            if($n == $numStr[1])
            {
                echo ("$valor<br/>");
                break;
            }
        }
        else
        {
            if($n == $numStr[1])
            {
                echo (" y $valor<br/>");
                break;
            }
        }

    }
}




?>