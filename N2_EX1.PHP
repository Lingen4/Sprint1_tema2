<?php
//**************************** NIVEL 2 ****************************

//EJERCICIO 1

function precioLlamada ($duracion){

    if  ($duracion<3){
        $costo = 10;
    }else{
        $costo = 10 + ($duracion-3)*5;
    }

    if ($costo>=100){
        $costoEU = ($costo/100);
        return "$costoEU €";
    }else{
        return "$costo centimos";
    }
    
}

$duracion = readline ("Cuantos minutos ha durado la llamada?: ");
$precio = precioLlamada($duracion);

 echo "El costo ha sido de $precio";


?>