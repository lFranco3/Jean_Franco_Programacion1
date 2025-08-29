<?php
$persona = array(
    "nombre" => "elpepe",
    "edad" => 999,
    "ciudad" => "Maracaibo"
);

$json = json_encode($persona);

echo $json;
?>