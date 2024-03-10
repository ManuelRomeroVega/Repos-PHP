<?php
define("N",5); // Cambiar después por 15, según enunciado
// Rellenar un array con 15 números desde teclado
for ($i=0;$i<N;$i++){
    $numeros[$i] = readline("Número ".($i+1).": ");
}

// Rotamos el array de izqda a drcha "a pelo"
/*$aux = $numeros[N-1];
for ($i=N-1;$i>0;$i--){
    $numeros[$i] = $numeros[$i-1];
}
$numeros[0] = $aux;
*/

// Alternativa con push y shift
$aux = array_shift($numeros);
array_push($numeros,$aux);


$cadena = "";
foreach ($numeros as $valor){
    $cadena .= "$valor, ";
};

// Elimino los dos últimos caracteres de la cadena (la coma y el espacio)
$cadena = substr($cadena,0,-2);
echo $cadena;




