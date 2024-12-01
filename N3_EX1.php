<?php

//**************************** NIVEL 3 ****************************
// EJERCICIO 1

$lista = [];
$numero = (int)readline("Introduce el numero límite para la criba de números primos: ");

for ($i = 2; $i <= $numero; $i++) {
    array_push($lista, $i);
}


function cribaPrimos(&$lista)
{
    $indice = 0;
    
    while ($lista[$indice] ** 2 <= end($lista)) {

        $primerNumero = $lista[$indice];

        foreach ($lista as $key => $n) {
            if ($n != $primerNumero && $n % $primerNumero == 0) {
                unset($lista[$key]);
            }
        }

        $lista = array_values($lista);
        $indice++;
    }

    return $lista;
}

$nuevalista = cribaPrimos($lista);

print_r($nuevalista);


?>