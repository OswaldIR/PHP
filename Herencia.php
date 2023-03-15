<?php

//Clase Padre
class SeleccionFutbol{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function Concentrarse(){
        echo $this->nombre.", está en concentración";
    }

    public function Viajar(){
        echo $this->nombre.", está en un viaje";
    }
}

// Clase hija
class Jugador extends SeleccionFutbol{
    // Propiedades
    public $posicion;
    public $numero;
    // Métodos
    public function __construct($id, $nombre, $edad, $posicion, $numero){
        parent::__construct($id, $nombre, $edad);
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

Class Entrenador extends SeleccionFutbol{
    public $xp;
    public function __construct($id, $nombre, $edad, $xp){
        parent::__construct($id, $nombre, $edad);
        $this->xp=$xp;
    }
    public function DirigirEntrenamiento(){
        echo $this->nombre.", esta dirigiendo un entrenamiento";
    }
    public function DirigirPartido(){
        echo $this->nombre.", esta dirigiendo un partido";
    }
}

$j1 = new Jugador(12, "Lionel Messi", "37", "Delantero", 10);
echo $j1->concentrarse();

?>