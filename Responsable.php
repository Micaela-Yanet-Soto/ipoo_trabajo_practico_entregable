<?php
class Responsable {
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombreR;
    private $apellidoR;

    public function __construct($nEmpleado,$nLicencia,$nr,$ar){
        $this->numeroEmpleado = $nEmpleado;
        $this->numeroLicencia = $nLicencia;
        $this->nombreR = $nr;
        $this->apellidoR = $ar;
    }
    // Los metodos de acceso de cada uno de los atributos de la clase
    //Consultores u observadores
    public function get_nombre_responsable(){
        return $this-> nombreR; 
    }
    public function get_apellido_responsable(){
        return $this-> apellidoR; 
    }
    public function get_numero_empleado(){
        return $this-> numeroEmpleado; 
    }
    public function get_numero_licencia(){
        return $this-> numeroLicencia; 
    }
    // Modificadores
    public function set_nombre_responsable($nombResp){
         $this-> nombreR=$nombResp; 
    }
    public function set_apellido_responsable($apeResp){
         $this-> apellidoR=$apeResp; 
    }
    public function set_numero_empleado($numEmpl){
         $this-> numeroEmpleado=$numEmpl; 
    }
    public function set_numero_licencia($numLic){
         $this-> numeroLicencia=$numLic; 
    }

    // metodo toString
    public function __toString(){
        $informacionResponsable = "Nombre y apellido ".$this->get_nombre_responsable()." ".$this->get_apellido_responsable().
                                "\nNumero de empleado ".$this->get_numero_empleado().
                                "\nNumero de Licencia: ".$this->get_numero_licencia();
        return $informacionResponsable;
    }
}
