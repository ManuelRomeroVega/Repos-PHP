<?php
$agenda = array("Dentista a las 12h","Dimitir de Jefa a las 18:45");
//var_dump($agenda);

// Se podría localizar el elemento y luego modificarlo
// Opción 1: "a pelo"
$agenda[0] = "Dentista a las 16h";

// Opción 2: 
$posicion = array_search("Dentista a las 12h",$agenda);
$agenda[$posicion] = "Dentista a las 16h";
var_dump($agenda);

// Opción 1
unset($agenda[0]); // unset($agenda[$posicion]);
var_dump($agenda);
?>