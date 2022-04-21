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
//---Datos precargados de los pasajeros
function precargados(){
   $pasajerosArreglo =[]; 

    $pasajerosArreglo[1]=["Nombre: "=>"Juan","Apellido: "=>"Lopez","DNI: "=>38108670];
    $pasajerosArreglo[2]=["Nombre: "=>"Maria","Apellido: "=>"Mercedez","DNI: "=>11390790];
    $pasajerosArreglo[3]=["Nombre: "=>"Elmo","Apellido: "=>"Rojas","DNI: "=>20494023];
    $pasajerosArreglo[4]=["Nombre: "=>"Mario","Apellido: "=>"Diaz","DNI: "=>3690000];

    return $pasajerosArreglo;
}

// asigno una variable para poder utilizar el modulo precargado
$pasajerosCargados= precargados();

//Creo un objeto viaje

$objViaje = new Viaje (0021,"Loncopue",50,$pasajerosCargados);
echo $objViaje; // Muestro informacion del objViaje

echo"\n";
//Modifico el codigo 
echo"Ingrese el nuevo codigo: ";
$nuevoCodigo = trim(fgets(STDIN));
$objViaje->modifica_codigo($nuevoCodigo);
echo $objViaje;

echo"\n";
//Modifico el destino 
echo"Ingrese el nuevo destino: ";
$nuevoDestino = trim(fgets(STDIN));
$objViaje->modifica_destino($nuevoDestino);
echo $objViaje;

echo"\n";
$cant= count ($pasajerosCargados);
echo"Ingrese la posicion a modificar:";
$pos= trim(fgets(STDIN));
if ($pos<=$cant ) {
    echo"Ingrese el nombre: ";
    $nom= trim(fgets(STDIN));
    echo"Ingrese el apellido: ";
    $ape= trim(fgets(STDIN));
    echo"Ingrese el dni: ";
    $doc= trim(fgets(STDIN));

    $objViaje->modifica_pasajero($nom,$ape,$doc,$pos);
    echo$objViaje->__toString();
}
