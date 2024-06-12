<?php

// --------------------------------
// -- Tipos de Datos Booleanos
// --------------------------------

$valorVerdadero = true; //tiene valor verdadero
$valorFalso = false; // tiene valor falso

// echo $valorVerdadero; // devuelve 1
echo $valorFalso; // devuelve "" o la nada misma

var_dump($valorVerdadero);
var_dump($valorFalso);
$cadenafalsa = "";
$cadenaverdadera = "a";
echo "La cadena falsa devuelve: " . (bool)$cadenafalsa . PHP_EOL;
echo "La cadena verdadera devuelve: " . (bool)$cadenaverdadera . PHP_EOL;
$intfalso = 0;
$intverdadero = -1;
echo "El int falso devuelve: " . (bool)$intfalso . PHP_EOL;
echo "El int verdadero devuelve: " . (bool)$intverdadero . PHP_EOL;
$floatfalso = 0.00000;
$floatverdadero = 0.00001;
echo "El float falso devuelve: " . (bool)$floatfalso . PHP_EOL;
echo "El float verdadero devuelve: " . (bool)$floatverdadero . PHP_EOL;