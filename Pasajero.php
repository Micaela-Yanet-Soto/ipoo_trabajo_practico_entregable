<?php
class Pasajero{
    private $nombreP;
    private $apellido;
    private $dni;
    private $telefono;

    public function __construct($nom,$ape,$doc,$tel){
        $this->nombreP=$nom;
        $this->apellido=$ape;
        $this->dni=$doc;
        $this->telefono=$tel;
    }
    // Los metodos de acceso de cada uno de los atributos de la clase
    //Consultores u observadores
    public function get_nombre(){
        return $this-> nombreP; 
    }
    public function get_apellido(){
        return $this-> apellido; 
    }
    public function get_dni(){
        return $this-> dni; 
    }
    public function get_telefono(){
        return $this-> telefono; 
    }
    // Modificadores
    public function set_nombre($nom){
        $this-> nombreP = $nom; 
    }
    public function set_apellido($ape){
        $this-> apellido = $ape; 
    }
    public function set_dni($documento){
        $this-> dni = $documento; 
    }
    public function set_telefono($numero){
        $this-> telefono = $numero; 
    }

    public function __toString(){
        $datosPasajero = "Nombre y apellido ".$this->get_nombre()." ".$this->get_apellido().
                        "\nNumero de Documento: ".$this->get_dni().
                        "\nNumero de contacto: ".$this->get_telefono();
        return $datosPasajero;
    }
    // operaciones que me permitiran modificar:
    // el nombre , apellido y el telefono de un pasajero.
    public function cambiar_nombre($modificaNombre){
        $modificaN = "Nombre: ".$this->set_nombre($modificaNombre);
       
    }
    public function cambiar_apellido($modificaApellido){
        $modificaA = "Apellido: ".$this->set_apellido($modificaApellido);
        
    }
    public function cambiar_telefono($modificaTelefono){
        $modificaT = "Telefono : ".$this->set_telefono($modificaTelefono);
        
    }
}
