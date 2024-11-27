
<?php
//**************************** NIVEL 1 ****************************
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




?>