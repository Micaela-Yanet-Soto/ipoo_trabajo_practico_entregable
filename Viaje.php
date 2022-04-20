<?php
/**
 * ---------------------------------- CONSIGNA DE LA CLASE VIAJE -------------
 * La empresa de transporte de pasajeros viaje feliz quiere registrar la informacion referente a sus viajes.
 * 
 * De cada viaje presisa almacenar:
 *      codigo del mismo
 *      destino
 *      cantidad maxima de pasajeros
 *      pasajeros del viaje
 * 
 * Realizar la implementacion de la clase viaje e implementar los medos necesarios para modificar los atributos
 * de dicha clase ( incluso los datos de los pasajeros)
 * 
 * Utilice una array que almacene la informacion correspondiente a los pasajeros. Cada pasajero es un array asociativo
 * con las siguientes claves:
 *                          Nombre
 *                          Apellido
 *                          Numero de documento
 * ---------------------------------------------------------------------------
 */
class Viaje{
    private $codigo;
    private $destino;
    private $cantidadMaximaPasajero;
    private $pasajeros;// hace una referencia a una lista de pasajeros
    

    // Medoto constructor

    public function __construct ($idPasaje, $destin, $cantMaxPasj , $abordo){
        $this-> codigo = $idPasaje;
        $this-> destino =$destin;
        $this-> cantidadMaximaPasajero = $cantMaxPasj;
        $this-> pasajeros = $abordo;
        
    }
    // Consultores u observadores
    public function get_codigo(){
        return $this->codigo;
    }
    public function get_destino(){
        return $this->destino;
    }
    public function get_cantidad_maxima_pasajeros(){
        return $this->cantidadMaximaPasajero;
    }
    public function get_pasajeros(){
        return $this->pasajeros;

    }
    
    // Modificadores

    public function set_codigo($id){
        $this->codigo = $id;
    }
    public function set_destino($des){
        $this->destino = $des;
    }
    public function set_cantidad_maxima_pasajeros($maxPasajero){
        $this->cantidadMaximaPasajero = $maxPasajero;
    }
    public function set_pasajeros($pasaj){
        $this->pasajeros = $pasaj;
    }
    

    // Metodo toString

    public function __toString(){
        $informacionViaje = "El viaje correspondiente al siguiente codigo ".$this ->get_codigo().
                            "\ntiene como destino ir a ".$this ->get_destino().
                            "\ncon una cantidad maxima de pasajeros permitido de: ".$this ->get_cantidad_maxima_pasajeros().
                            "\nSe detallan a continuacion los datos de los pasajeros abordo\n".$this->muestra_datos_pasajeros();
        
        

        return $informacionViaje;
    }
    //Muestra la informacion de los pasajeros 
    public function muestra_datos_pasajeros(){
        $pasaj= $this->get_pasajeros();
        $info ="";
        foreach ($pasaj as $pasaj => $value) {
            $info= "Pasajero\n";
            foreach ($value as $key => $valor) {
                $info= $info."\n".$key." : ".$valor;
            }
        }
        $info;
    }

    // Modifica codigo
    public function modifica_codigo($nuevoId){
        $this->set_codigo($nuevoId);
    }
    // Modifica destino
    public function modifica_destino($nuevoDest){
        $this->set_destino($nuevoDest);
    }
    // Modifica cantidad de pasajeros abordo
    public function modifica_cantidad_pasajeros_abordo($actuPasaj){
        $this->set_pasajeros_abordo($actuPasaj);
    }


}
