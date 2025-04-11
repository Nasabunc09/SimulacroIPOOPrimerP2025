<?php
class Venta{

    private $numero;

    private $fecha;

    private $objCliente;

    private $colMotos;

    private $precio;

    public function __construct($numero,$fecha,$objCliente,$colMotos,$precio) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->colMotos = $colMotos;
        $this->precio = $precio;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getObjCliente(){
        return $this->objCliente;
    }
    public function getColMotos(){
        return $this->colMotos;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setObjCliente($objCliente){
        $this->objCliente = $objCliente;
    }
    public function setColMotos($colMotos){
        $this->colMotos = $colMotos;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    private function obtenerValoresCol($col){

        $cadena = "";
        foreach($col as $elemento){
            $cadena = $cadena."".$elemento."\n";

        }

        $cadena;
    }
    public function __toString(){
        
        $cadena = "------------VENTA------------"."\n".
        $cadena.= "Numero Tienda: ".$this->getNumero()."\n". 
        $cadena.= "Fecha: ".$this->getFecha()."\n". 
        $cadena.= "Cliente: -----".$this->getObjCliente()."-----\n".
        $cadena.= "Coleccion Motos: ".$this->colMotosAString()."\n". 
        $cadena = "Precio: ".$this->getPrecio();   

        return $cadena;
    }

    public function colMotosAString(){

        $cadena = "";
        $motos = $this->getColMotos();

        for($i = 0; $i < count($motos); $i++){

            $cadena = $cadena . "Moto n° [".$i."]:\n".$motos[$i]."\n---\n";
        }

        return $cadena;
    }

    public function incorporarMoto($objMoto){

        if($objMoto->getActiva()){
            
            $colMotosAux = $this->getColMotos();
            array_push($colMotosAux,$objMoto);
            $this->setColMotos($colMotosAux);

            $precioMoto = $objMoto->darPrecioVenta();
            $precioFinalAux = $this->getPrecio();
            $precioFinalAux = $precioFinalAux + $precioMoto;
            $this->setPrecio($precioFinalAux);
        }


    }

}

?>   