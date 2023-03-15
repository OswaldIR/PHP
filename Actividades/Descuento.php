<?php
//Nombre y Costo de la compra
$nombre = "Eva Castro";
$compra = 350;
//Condicionales para determinar el descuento
if($compra<50){
    $desc = .005;
} elseif ($compra >= 50 && $compra < 100){
    $desc = .1;
} elseif ($compra >= 100 && $compra < 250){
    $desc = .15;
} elseif ($compra >= 250 && $compra < 400){
    $desc = .2;
} else {
    $desc = 0;
}
//Imprimir el nombre junto con el costo de la compra y el precio con descuento si aplicó
$precio_final = $compra - ($compra * $desc);
echo "Hola, ". $nombre ." el valor de la compra es de: $". $compra ." y con descuento el total es de: $". $precio_final;
/*
Hola, Juan Pablo el valor de la compra es de: $55 y con descuento el total es de: $49.5
Hola, Kenia Ortiz el valor de la compra es de: $120 y con descuento el total es de: $102
Hola, Angie Andrade el valor de la compra es de: $275 y con descuento el total es de: $220
Hola, Eva Castro el valor de la compra es de: $350 y con descuento el total es de: $280
*/
?>