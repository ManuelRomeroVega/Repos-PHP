<?php
//var_dump(json_decode($_POST['numeros']));
$numeros = json_decode($_POST['numeros']);
$suma = 0;
$cont = count($numeros);
for ($i=0;$i<$cont;$i++){
    $suma += $numeros[$i];
}
echo $suma/$cont;
