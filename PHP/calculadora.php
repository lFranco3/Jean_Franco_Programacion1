<?php

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

do {

echo"===== MENU ===== \n";
echo" 1. suma \n 2. resta \n 3. multiplicacion \n 4. division \n 5. Salir \n";
$opcion = "Ingrese la operacion a realizar";

if ($opcion == 1) {
    $a = readline("Ingrese primero numero a sumar: ");
    $b = readline("Ingrese segundo numero a sumar: ");
    suma($a, $b);
}

else if ($opcion == 2) {
    $a = readline("Ingrese primero numero a restar: ");
    $b = readline("Ingrese segundo numero a restar: ");
    resta($a ,$b);
}

else if ($opcion == 3) {
    $a = readline("Ingrese primero numero a multiplicar: ");
    $b = readline("Ingrese segundo numero a multiplicar: ");
    multiplicacion($a,$b);
}

else if ($opcion == 4) {
    $a = readline("Ingrese primero numero a dividir: ");
    $b = readline("Ingrese segundo numero a dividir: ");
    division($a,$b);
}

else {
    echo "Error: Ingrese una opcion valida";
}

} while ($opcion == 5);

echo "saliendo...";

?>