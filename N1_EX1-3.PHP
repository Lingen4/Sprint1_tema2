<?php

//**************************** NIVEL 1 ****************************
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


// EJERCICIO 3A

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


//EJERCICIO 3B



function Calculadora($number, $number2, $valor)
{


    if ($valor == '+') {
        $total = $number + $number2;
    } elseif ($valor == '-') {
        $total = $number - $number2;
    } elseif ($valor == '*') {
        $total = $number * $number2;
    } elseif ($valor == '/') {
        if ($number2 == 0) {
            return "No se puede dividir por 0";
        } else {
            $total = $number / $number2;
        }
    } elseif ($valor == '%') {
        if ($number2 == 0) {
            return "No se puede hacer modulo de 0";
        } else {
            $total = $number % $number2;
        }
    } else {
        return "Operación no válida";
    }

    return $total;
}

do {
    $numero1 = (int) readline("\nIntroduzca el primer numero: ");
    $numero2 = (int) readline("Introduzca el segundo numero: ");
    $operador = readline("Introduzca la operación a realizar: ");

    $total = Calculadora($numero1, $numero2, $operador);

    echo "Resultado: $total";

    $salir = readline("\n 0 para salir, cualquier tecla para otra operación");
} while ($salir !== '0');

?>