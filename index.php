<?php

$texto = "Hello, World";
$entero= 25;
$doble = 20.4;
$booleano = false;

echo "<h3>string: ",$texto, " |integer: ", $entero," |double: ", $doble," |boolean: ", var_dump($booleano),"</h3>";

echo "<h1>hola</h1>";

echo "<h4>Texto mayúsculas: ", strtoupper($texto),"</h4>";
echo "<h4>Longitud de texto: ", strlen($texto),"</h4>";
echo "<h4>Texto al revés: ", strrev($texto),"</h4>";

$phptexto = "Este es el curso de PHP";
echo "<h4>Texto junto con espacio: ", $texto,". ", $phptexto, "</h4>";
echo "<h4>Texto junto sin espacio: ", $texto . $phptexto, "</h4>";


$x= 3;
$y= 10;  
$m= 7.77;
$n= 4.25;

echo "X: $x", ", Y: $y", ", M: $m", ", N: $n<br>";

echo $x," y ", $y,"<br>";
echo $x,"+", $y,"=", $x+$y, "<br>";
echo $x,"-", $y,"=", $x-$y, "<br>";
echo $x,"*", $y,"=", $x*$y, "<br>";
echo $x,"/", $y,"=", $x/$y, "<br>";
echo $x,"%", $y,"=", $x%$y, "<br>";

echo $m," y ", $n,"<br>";
echo $m,"+", $n,"=", $m+$n, "<br>";
echo $m,"-", $n,"=", $m-$n, "<br>";
echo $m,"*", $n,"=", $m*$n, "<br>";
echo $m,"/", $n,"=", $m/$n, "<br>";
echo $m,"%", $n,"=", $m%$n, "<br>";

echo "<h4>El doble de X --> ", $x*2, " | Y --> ",$y*2, " | M -->", $m*2," | N --> ",$n*2,"</h4>";
echo "<h4>Suma total --> ", $x+$y+$m+$n, "</h4>";
echo "<h4>Producto total --> ", $x*$y*$m*$n, "</h4>";

function Calculadora(){
    
}
?>



