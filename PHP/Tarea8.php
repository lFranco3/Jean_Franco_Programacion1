<?php
$par = 3;
$impar = 5;
$tierramar = 15;

for($i = 0; $i <= 30; $i++) {

    if ($tierramar == $i) {
        echo "Numero $i Tierra Mar\n";
        $tierramar += 15;
        $par += 3;
        $impar +=5;
    }

    else if ($par == $i) {
    
    echo "Numero $i Mar\n";
    $par += 3;
    }

    else if ($impar == $i) {
        echo "numero $i Tierra\n";
        $impar +=5;
    }

    else {
        echo "numero $i\n";
    }

}
?>