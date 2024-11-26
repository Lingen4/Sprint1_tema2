<?php

// NIVEL 1

// EJERCICIO 1 Y 2
$texto = "Hello, World";
$entero= 25;
$doble = 20.4;
$booleano = false;

echo $texto, " |integer: ", $entero," |double: ", $doble," |boolean: ", var_dump($booleano);

define ("MINOMBRE", "Luciano Fontanarrosa");

echo "Hola, soy ", MINOMBRE . PHP_EOL;

echo "\n\nTexto mayúsculas: ", strtoupper($texto);
echo "\nLongitud de texto: ", strlen($texto);
echo "\nTexto al revés: ", strrev($texto);

$phptexto = "Este es el curso de PHP";
echo "\nConcatenación con espacio: ", $texto,". ", $phptexto;
echo "\nConcatenación sin espacio: ", $texto . $phptexto;


// EJERCICIO 3 

$x= 3;
$y= 10;  
$m= 7.77;
$n= 4.25;

echo "\n";
echo "\nX: $x", ", Y: $y", ", M: $m", ", N: $n\n";

echo"\nINTEGERS" . PHP_EOL;
echo "$x y $y";
echo "\n$x + $y = ", $x+$y;
echo "\n$x - $y = ", $x-$y;
echo "\n$x * $y = " ,$x*$y;
echo "\n$x / $y = ", $x/$y;
echo "\n$x % $y = ", $x%$y;
echo "\n";

echo"\nDOUBLE" . PHP_EOL;

echo $m," y ", $n;
echo "\n$m + $n = ", $m+$n;
echo "\n$m - $n = ", $m-$n;
echo "\n$m * $n = ", $m*$n;
echo "\n$m / $n = ", $m/$n;
echo "\n$m % $n = ", $m%$n . PHP_EOL;
echo "\n";
echo "El doble de X --> ", $x*2, " | Y --> ",$y*2, " | M -->", $m*2," | N --> ",$n*2 . PHP_EOL;
echo "Suma total --> ", $x+$y+$m+$n . PHP_EOL;
echo "Producto total --> ", $x*$y*$m*$n . PHP_EOL;

/*
function Calculadora(){
    $number = (int) readline("Introduzca el primer numero: ");
    $number2 = (int) readline("Introduzca el segundo numero: ");
    $valor = readline("Introduzca la operación a realizar: ");

    if ($valor == '+') {
        $total = $number + $number2;
    } elseif ($valor == '-') {
        $total = $number - $number2;
    } elseif ($valor == '*') {
        $total = $number * $number2;
    } elseif ($valor == '/') {
        if($number2 == 0){
            echo "No se puede dividir por 0";
        }else{
        $total = $number / $number2;
    }
    } elseif ($valor == '%') {
        $total = $number % $number2;
    } else {
        echo "Operación no válida";
    }
   
}

$total = Calculadora();

echo "Resultado: $total";
*/

// EJERCICIO 4
/*
function contarNumero(){

    $numero = readline("¿Hasta que número quieres contar?: ");

    if (is_numeric($numero)==false){
        $numero = 10;
    }else{
        $numero = (int)$numero;
    }

    $pasos = (int) readline("De cuanto en cuanto quieres contar?: ");

    for ( $i=0; $i<=$numero; $i+=$pasos){
        echo $i . "\n";
    }
}

contarNumero();
*/


// EJERCICIO 5
/*
$nota = 60;

if ($nota<33){
   echo "Reprobado";
} else if ($nota<=44){
    echo "Tercera division";
}else if ($nota<=59){
    echo "Segunda division";
}else {
    echo "Primera division";
}

*/

// EJERCICIO 6
/*
function isBitten(){
    $bit= rand(0,1);

    if (!$bit){
        echo "Acaricias a Charlie, se deja";
    }else{
        echo "Acaricias a Charlie, te muerde";
    }
}

isBitten()
*/

//**************************** NIVEL 2 ****************************




?>



