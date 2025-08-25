<?php
$grado = readline("ingrese la temperatura");

if ($grado <= 10) {
    echo "Frio";
}

else if ($grado >= 10 && $grado <= 25) {
    echo "Templada";
}

else if ($grado >= 25) {
    echo "Calurosa";
}

else {
    echo "ingrese un valor valido";
}

?>