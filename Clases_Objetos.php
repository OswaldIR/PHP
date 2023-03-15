<?php

class Jugador{
    // Propiedades
    public $nombre;
    public $posicion;
    public $numero;
    // Métodos
    public function __construct($nombre, $posicion, $numero){
        $this->nombre=$nombre;
        $this->posicion=$posicion;
        $this->numero=$numero;
    }
    public function Entrenar(){
        echo $this->nombre." esta entrenando";
    }
    public function Jugar(){
        echo $this->nombre." esta en juego";
    }
}

$jugador1 = new Jugador("Lionel Messi", "Delantero", 10);
$jugador1->Entrenar();

$jugador2 = new Jugador("Cristiano Ronaldo", "Delantero", 7);

echo '<pre>';
var_dump($jugador1);
echo '</pre>';

echo '<pre>';
var_dump($jugador2);
echo '</pre>';

?>