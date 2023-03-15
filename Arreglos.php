<?php

// $arreglo1 = array ("Elemento 1", 2, "Elemento 3", 4, 5);
// $arreglo2 = ["Elemento 1", 2, "Elemento 3", 4, 5.6, false];
$arreglo3 = array(
    'nombre' => 'Elias',
    'edad' => 25,
    'telefono' => 3112708533,
    'estatura' => 1.80);

echo '<pre>';
var_dump($arreglo3);
echo '</pre>';

array_pop($arreglo3);

echo '<pre>';
var_dump($arreglo3);
echo '</pre>';

?>