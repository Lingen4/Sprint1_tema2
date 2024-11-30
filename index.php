<?php
//**************************** NIVEL 1 ****************************
/*
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

// EJERCICIO 4

function contarNumero($numero, $pasos){

    if (is_numeric($numero)==false){
        $numero = 10;
    }else{
        $numero = (int)$numero;
    }
   
    for ( $i=0; $i<=$numero; $i+=$pasos){
        echo $i . "\n";
    }
}

$numeroTope = readline("¿Hasta que número quieres contar?: ");
$pasosIntro = (int) readline("De cuanto en cuanto quieres contar?: ");

contarNumero($numeroTope,$pasosIntro);



// EJERCICIO 5

function nota($nota){

if ($nota<33){
   return "reprobado";
} else if ($nota<=44){
    return "en Tercera division";
}else if ($nota<=59){
    return "en Segunda division";
}else {
    return "en Primera division";
}

}

do{$introNota = readline("Escribe tu nota: ");}while($introNota<0||$introNota>100);

$nota=nota($introNota);

echo  "Estás $nota";


// EJERCICIO 6



function isBitten($bit){
    

    if (!$bit){
        echo "Acaricias a Charlie, se deja\n";
    }else{
        echo "Acaricias a Charlie, te muerde\n";
    }
}

for ($i=0; $i<10;$i++){
    $bit= rand(0,1);
    isBitten($bit);
}

*/



//**************************** NIVEL 2 ****************************

//EJERCICIO 1
/*
function precioLlamada (){

    $duracion = readline ("Cuantos minutos ha durado la llamada?: ");

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

 $precio = precioLlamada();
 echo "El costo ha sido de $precio";
*/

//EJERCICIO 2
/*


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

*/

//**************************** NIVEL 3****************************

/*
<?php
//**************************** NIVEL 3 ****************************
// EJERCICIO 1

$lista =array();
$numero = (int)readline ("Introduce un numero: ");


for ($i=2; $i<=$numero; $i++){
    array_push($lista, $i);}


function cribaPrimos(&$lista){
    
$ultimoNumero = end($lista);

foreach ($lista as $n){
    
if ($n%2==0){
    unset($n);
}}

foreach($lista as $n){
    if ($n**2<$ultimoNumero){
        if($n%($lista[0])==0){  
            unset($n);
        }else{
            return;
        }
    }
}
}

cribaPrimos($lista);

print_r($lista);

?>

        */
