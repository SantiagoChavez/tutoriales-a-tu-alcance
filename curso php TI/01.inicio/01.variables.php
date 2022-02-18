<?php

#variable numerica
$numero = 5;
echo "Esto es una variable Numero: $numero";
echo "<br><br>";

#variable texto
$palabra = "palabra";
echo "Esto es una variable texto: $palabra<br>";
echo "<br><br>";

#variable boleana (boolean)
$boleana = true;
echo "Esto es una variable boleana: $boleana";
echo "<br><br>";

#variable arreglo
$colores = array("rojo", "amarillo");
echo "Esto es una variable arreglo: $colores[1]";
echo "<br><br>";

#variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]";
echo "<br><br>";

#variables de tipo objeto
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta2";
echo "<br><br>";


?>