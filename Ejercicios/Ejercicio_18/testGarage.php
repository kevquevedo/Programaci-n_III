<?php
require "ejer_18.php";


$miGarage = new Garage("Estacionamiento Kevin", 50.00);
$miGarage->MostrarGarage();
echo("<br/>");

$auto1 = new Auto("Peugeot", "Gris");
$auto2 = new Auto("Fiat", "Blanco");
$auto3 = new Auto("Chery", "Rojo");
$miGarage->Add($auto1);
$miGarage->Add($auto2);
$miGarage->Add($auto3);
$miGarage->MostrarGarage();
echo("<br/>");

$miGarage->Remove($auto2);
$miGarage->MostrarGarage();
echo("<br/>");


?>