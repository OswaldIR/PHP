<?php
/* 
public _ se puede acceder desde objecto o clase.
protected _ se puede acceder unicamente en la clase.
private _ se puede acceder unicamente por la clase que lo contiene
*/
//Clase Padre
class SeleccionFutbol{
    public $id;
    protected $nombre;
    private $edad;

    public function __construct($id, $nombre, $edad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
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
//Acceder desde el objeto
//echo $j1->edad;
//Acceder desde la clase
echo $j1->getNombre();
echo '<br>';
echo $j1->setNombre("Cristiano Ronaldo");
echo '<br>';
echo $j1->getNombre();

?>