<?php
function Frecuencia($texto) {

    $texto = strtolower($texto);


    $texto = preg_replace('/[^\p{L}\p{N}\s]/u', '', $texto);


    $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY);


    $frecuencia = array_count_values($palabras);
    return $frecuencia;
}


$texto = "oye gelda escuchate este temazo... pa pa papa pa papa bababa bababa bababa";
$frecuencias = Frecuencia($texto);


foreach ($frecuencias as $palabra => $conteo) {
    echo "$palabra: $conteo\n";
}
?>