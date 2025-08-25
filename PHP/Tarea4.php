<?php
$impar = 0;
$impar2 = 0;

for($i = 0; $i <= 100; $i++) {

    if ($impar != $i) {
        $impar2 = $impar + $i;
        echo "Numero". $impar2;
    }
}
?>