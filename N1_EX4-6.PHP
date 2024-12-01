
<?php
//**************************** NIVEL 1 ****************************
// EJERCICIO 4

function contarNumero(int $numero = 10, int $pasos = 2): void
{

    echo "Se va a contar de $pasos en $pasos hasta $numero";

    for ($i = 0; $i <= $numero; $i += $pasos) {
        echo  "\n" . $i;
    }
}

$numeroTope = readline("¿Hasta que número quieres contar?: ");
$pasosIntro = readline("De cuanto en cuanto quieres contar?: ");

$numeroTope = $numeroTope === "" ? 10 : (int)$numeroTope;
$pasosIntro = $pasosIntro === "" ? 2 : (int)$pasosIntro;

contarNumero($numeroTope, $pasosIntro);


// EJERCICIO 5

function nota($nota)
{

    if ($nota < 33) {
        return "reprobado";
    } else if ($nota <= 44) {
        return "en Tercera division";
    } else if ($nota <= 59) {
        return "en Segunda division";
    } else {
        return "en Primera division";
    }
}

do {
    $introNota = readline("Escribe tu nota: ");
} while ($introNota < 0 || $introNota > 100);

$nota = nota($introNota);

echo  "Estás $nota";


// EJERCICIO 6



function isBitten($bit)
{


    if (!$bit) {
        echo "Acaricias a Charlie, se deja\n";
    } else {
        echo "Acaricias a Charlie, te muerde\n";
    }
}

for ($i = 0; $i < 10; $i++) {
    $bit = rand(0, 1);
    isBitten($bit);
}




?>