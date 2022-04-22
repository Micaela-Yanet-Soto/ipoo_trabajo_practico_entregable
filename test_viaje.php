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

include "Viaje.php";
include 'Pasajero.php';
include 'Responsable.php';
/*---------------------------Lo utilizaba e la parte del tpo1
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
*/

// -----------------------------------------------------------------------EMPIEZO A MODIFICAR EL TEST PARA EL TPO 2
//Creo un objeto de pasajero que hara referncia a una coleccion pasajero

$objPasajeroUno= new Pasajero("Maria","Mercedez","11390790","299 634 564");
$objPasajeroDos =new Pasajero("Elmo","Sancherz","38108670","299 644 677");
$objPasajeroTres=new Pasajero("Mario","Rojas","20494023","299 234678");
$objPasajeroCuatro= new Pasajero("Juan","Lopez","36900000","299 4893555");

$coleccionPasajero = [$objPasajeroUno,$objPasajeroDos,$objPasajeroTres,$objPasajeroCuatro];
// Creo un objerto responsable del viaje
$objResponsableViaje = new Responsable(19,"id123","Guadalupe","Ramirez");

//Creo un objeto viaje

$objViaje = new Viaje (0021,"Loncopue",$coleccionPasajero,50,$objResponsableViaje);
echo $objViaje; // Muestro informacion del objViaje
