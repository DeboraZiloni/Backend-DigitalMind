<?php

// --------------------------------
// -- Tipos de Datos de Cadena de Caracteres - String
// --------------------------------

$nombre = "D'alessandro";
$unaCadenaDobleComillas = "Mi \"amigo\" $nombre es un gran futbolista"; //Las barra invertida permite escapar caracteres\
echo $unaCadenaDobleComillas;
$unaCadenaSimpleComillas = 'Mi "amigo" '. $nombre. ' es un gran futbolista';
echo PHP_EOL;
echo $unaCadenaSimpleComillas;