<?php
/**
 * Alumno: Soto Micaela Yanet
 * Legajo: Fai-1391
 * Carrera: Tecnicatura Universitaria en Desarrollo Web
 */
/**
 * -------------------------CONSIGNA DEL TEST VIAJE ------------------
 * Implementar un script testViaje.php que cree una instancia clase viaje y presente un menu
 * que permita:
 *              Cargar informacion del viaje
 *              Modificar
 *              Ver sus datos
 * --------------------------------------------------------------------
 */

// Llamamos a la clase Viaje.
include "Viaje.php";

// ------------------------------ CARGAR INFORMACION DEL VIAJE ------------------

// Modulo que permitira al usuario cargar los pasajeros
function cargaPasajeros($cantidad){
    $pasajerosArreglo =[];
    for ($i=0; $i <$cantidad ; $i++) { 
        echo "Ingrese el nombre: ";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese el apellido: ";
        $apellido = trim(fgets(STDIN));
        echo "Ingrese el DNI: ";
        $doc = trim(fgets(STDIN));
        echo"\n";
        $pasajerosArreglo[$i]=["Nombre: "=>$nombre,
                            "Apellido: "=>$apellido,
                            "DNI: "=>$doc ];
    }
    return $pasajerosArreglo;
}


/**
 * Para poder crear mi objeto voy a pedir que se ingrese la siguiente informacion
 * para dar paso a continuacion
 */
echo "Cual es el codigo del viaje: ";
$idViaje = trim(fgets(STDIN));
echo "\nCual es el DESTINO del viaje: ";
$destinoViaje = trim(fgets(STDIN));
echo "\nCual es la CANTIDAD MAXIMA permitida de pasajeros: ";
$cantMaxi = trim(fgets(STDIN));
echo "\nCual es la CANTIDAD DE PASAJEROS ABORDO: ";
$pasajeros = trim(fgets(STDIN));


//Si la cantidad de pasajeros abordo no supera la cantidad maxima permitida
// se podra acceder a la  creacion del objeto viaje.
if ( ($cantMaxi >= $pasajeros) ){
    //invoco la funcion que carga a los pasajeros
    $datosPasajeros = cargaPasajeros($pasajeros);

    //Creo un objeto de la clase viaje 
$objViaje = new Viaje ($idViaje, $destinoViaje,$cantMaxi,$datosPasajeros,$pasajeros);

}else{
    echo" La canstidad de pasajeros abordo no puede ser mayor a la cantidad maxima permitida";
}

// ------------------------------ MODIFICAR ------------------

echo "Que desearia modificar: 
     \n 1 - Codigo de viaje.\n 2 - Destino. \n 3 - Cantidad de pasajeros abordo. \n 4 - Toda informacion.";
echo "\nIngrese el numero correspondiente ";
$eleccion = trim(fgets(STDIN));
if ($eleccion <= 4) {
    switch ($eleccion) {
        case 1:
            echo "Cual es el NUEVO codigo del viaje: ";
            $nuevoId = trim(fgets(STDIN));

            $objViaje->set_codigo($nuevoId);
            echo $objViaje;
            break;
        case 2:
            echo "\nCual es el NUEVO DESTINO del viaje: ";
            $nuevoDestino = trim(fgets(STDIN));

            $objViaje->set_destino($nuevoDestino);
            echo $objViaje;
                break;
        case 3:
            echo "\nCual es la NUEVA CANTIDAD DE PASAJEROS ABORDO: ";
            $actuPasajeros = trim(fgets(STDIN));

            $objViaje->set_pasajeros_abordo($actuPasajeros); // actualizo la cantidad de pasajero a bordo


            $diferencia = $pasajeros - $actuPasajeros;
            if($diferencia <$pasajeros ){ // si la diferencia es mayor a la cantidad que ya habia cargado 
                //se pedira los datos de los nuevos pasjeros agregandolos a la lista ya creada antes.
                
                for ($i=0; $i <$diferencia ; $i++) { 
                    
                 }
            }


                break;
        case 3:
            echo "Cual es el NUEVO codigo del viaje: ";
            $nuevoId = trim(fgets(STDIN));
            echo "\nCual es el NUEVO DESTINO del viaje: ";
            $nuevoDestino = trim(fgets(STDIN));
            echo "\nCual es la NUEVA CANTIDAD DE PASAJEROS ABORDO: ";
            $actuPasajeros = trim(fgets(STDIN));
                break;
        default:
                echo "error no se encontro eleccion";
                  break;
    }
}

