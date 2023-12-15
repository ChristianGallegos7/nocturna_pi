<?php

function conectarDb() {
    $db = new mysqli('localhost', 'root', '', 'citas_medicas');
}

if(!$db){
    echo "No se pudo conectar";
    exit;
}

return $db;

?>