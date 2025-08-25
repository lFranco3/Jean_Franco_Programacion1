<?php

$a = readline("Ingrese primero numero: ");
$b = readline("Ingrese segundo numero: ");

function suma($a, $b) {
    $suma = $a + $b;
    echo "La suma de $a y $b es: $suma\n";
}
function resta($a, $b) {
    $resta = $a - $b;
    echo "La resta de $a y $b es: $resta\n";
}
function multiplicacion($a, $b) {
    $multiplicacion = $a * $b;
    echo "La resta de $a y $b es: $multiplicacion\n";
}
function division($a, $b) {
    $division = $a / $b;
    echo "La resta de $a y $b es: $division\n";
}

suma($a,$b);
resta($a,$b);
multiplicacion($a,$b);
division($a,$b);

?>