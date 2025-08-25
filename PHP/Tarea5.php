<?php
$Edad = readline("ingresa tu edad para verificar si puedes tener una licencia de conducir: ");

if ($Edad >= 18 && $Edad <= 65) {

    echo "Puedes crearte una licencia de conducir";
}
else {
        echo "Eres menor de edad, no puedes crearte una licencia de conducir";
    }
?>