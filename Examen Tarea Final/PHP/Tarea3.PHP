<?php
function numero($numero) {
    if ($numero <= 1) {
        return false;
    }

    if ($numero == 2) {
        return true;
    }

    if ($numero % 2 == 0) {
        return false;
    }

    for ($i = 3; $i <= sqrt($numero); $i += 2) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

$numero = 29;

if (numero($numero)) {
    echo "$numero es un numero primo";
} else {
    echo "$numero no es un numero primo";
}
?>
