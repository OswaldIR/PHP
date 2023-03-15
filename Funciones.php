<?php

/*
function saludar(){
    echo "Hola, Elias".'<br>';
}
saludar();

function suma(){
    $num1 = 5;
    $num2 = 10;
    $suma = $num1+$num2;
    echo $suma.'<br>';
}
suma();
*/

function saludar($name){
    echo "Hola ".$name.", eres un crack!".'<br>';
}
function suma($n1, $n2, $op){
    $total=0;
    if ($op=="Suma") {
        $total = $n1+$n2;
    } elseif ($op=="Resta") {
        $total = $n1-$n2;
    } elseif ($op=="Multiplicar") {
        $total = $n1*$n2;
    } elseif ($op=="Didivir") {
        $total = $n1/$n2;
    } else {
        echo "No se puede hacer esa operación";
    }
    return "La ".$op." es: ".$total;
}
saludar("Elias");
$resultado = suma(15, 21, "Resta");
echo $resultado;


?>