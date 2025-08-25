<?php
$par = 0;
$impar = 1;
$contador = 0;

for($i = 0; $i <= 50; $i++) {

    if ($par != $impar) {
    
    echo "Numero par:" . $contador. "\n";
    $par ++;
    $contador ++;

    }

    else {
    
    echo "Numero impar:". $contador. "\n";
    $impar ++;
    $contador ++;

    }

}
?>