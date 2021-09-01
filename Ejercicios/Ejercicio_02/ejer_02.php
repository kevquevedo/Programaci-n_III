<?php
/*Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/

echo date("d/m/Y");//ej: 01/02/2021
echo("<br/>"); 

echo date("j/n/y"); //ej: 1/2/21
echo("<br/>"); 

echo date("l"), " de ", date("F"); //ej: Miercoles de Septiembre
echo("<br/>"); 

echo date("z"), "- Dia Juliano"; //ej: 243 - Dia Juliano
echo("<br/>"); 

?>