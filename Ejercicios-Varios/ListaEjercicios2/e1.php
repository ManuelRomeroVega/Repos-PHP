<?php
// Función es_primo: recibe un número y deveulve un booleano
function es_primo($n){
    $esprimo = true;
    for ($i=2;$i<=sqrt($n) && $esprimo; $i++){
        if ($n%$i == 0){
            $esprimo = false;
        }
    }
    return $esprimo;
}

define("NL","\n");
define("TAMANIO",100);

$primos = array();

$numero = 1;
$cont = 0;
while ($cont < TAMANIO){
    if (es_primo($numero)){
        // Lo inserto en el array
        array_push($primos,$numero); // $primos[] = $numero;
        // Incremento la cuenta
        $cont++;
    }
    $numero++;
}

for ($i=0;$i<count($primos);$i++){
    echo $primos[$i].NL;
}
