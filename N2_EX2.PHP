<?php

//**************************** NIVEL 2 ****************************
//EJERCICIO 2

$total=0;

function compra($objeto, $cantidad){

$subtotal=0;

switch ($objeto) {
    case 0:
        echo "Adios\n";
        break;
    case 1:
        $subtotal += 1*$cantidad;
        break;
    case 2:
        $subtotal += 0.5*$cantidad;
        break;
    case 3:
        $subtotal += 1.5*$cantidad;
        break;
    default:
        echo "Parametro no reconocido\n";
        break;
    
}

return $subtotal;
}


do{
    $objetoIntro = readline("Que quieres comprar?\n
    0. Nada más\n
    1. Chocolate - 1€\n
    2. Chicles - 0.5€\n
    3. Caramelos - 1.5€");

    if ($objetoIntro==!0){
        do{$cantidadIntro = readline ("Cuantos quieres? ");}while($cantidadIntro<0);}
    
$subtotal = compra($objetoIntro, $cantidadIntro);

echo "\nEl subtotal es de $subtotal €\n";

$total +=$subtotal;

}while($objetoIntro==!0);


echo "El total es de $total €";


?>