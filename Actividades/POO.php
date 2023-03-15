<?php

class Persona{
    public string $nombre;
    public int $edad;
    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function Imprimir(){
        echo "Nombre: ".$this->nombre.'<br>'."Edad: ".$this->edad.'<br>';
    }

}

class Ciudadano extends Persona{
    public string $deposito;
    public function __construct($nombre, $edad, $deposito){
        parent::__construct($nombre, $edad);
        $this->deposito=$deposito;
    }

    public function Imprimir(){
        parent::Imprimir();
        echo "Deposito: ".$this->deposito.'<br>';
    }

    public function Impuesto(){
        if($this->deposito > 3000){
            echo $this->nombre.", deberá pagar impuestos".'<br>';
        } else{
            echo $this->nombre." no deberá pagar impuestos".'<br>';
        }
    }
}

$ciudadano = new Ciudadano("Mariano", 25, 5700);
$ciudadano->Imprimir();
$ciudadano->Impuesto();

?>