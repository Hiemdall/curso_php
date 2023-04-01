<?php

//  Gato 1 : 9
//  Gato 2 : 4
//  Gato 3 : 3
//  Gato 4 : 9
//  Gato 5 : 1


// Mostrar mensaje solicitando el nombre del usuario
//echo "Por favor, ingrese el numero del gato: ";
// Leer el nombre del usuario desde la terminal
//$gato = readline();


$gato = readline ("Por favor, ingresa el numero del gato: ");


switch ($gato) {
    case 1:
        echo "Su numeo favorito es el 9";
        break;
    case 2:
        echo "Su numeo favorito es el 4";
        break; 
    case 3:
        echo "Su numeo favorito es el 3";
        break;
    case 4:
        echo "Su numeo favorito es el 9";
        break;
    case 5:
        echo "Su numeo favorito es el 1";
        break;         
   
    default:
        echo "No hay opción";
        break;
}


?>