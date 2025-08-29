<?php
function invertirpalabra($texto) {
    return strrev($texto);
}

$palabra = "contexto te la comes sin pretexto";
$palabrainvertida = invertirpalabra($palabra);

echo "original: $palabra\n";
echo "invertido: $palabrainvertida\n";
?>