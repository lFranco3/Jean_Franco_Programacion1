<?php

$numero = mt_rand(1,100);
$intentos = 1;

while (true) {

    echo "intento nº:". $intentos . "\n";
    $numeroadivinar = readline("ingrese el numero a adivinar: ");

if ($numero == $numeroadivinar) {
        echo "Acertastes, el numero era";
}

else {
    echo "numero incorrecto, vuelve a intentar \n";
    $intentos ++;
}
}
?>