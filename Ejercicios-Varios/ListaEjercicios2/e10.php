<?php
// Calculo el número de 4 cifras
$combinacion = rand(1000,9999); // Podéis usar un número fijo para comprobarlo 
$oportunidades = 0;
$caja_abierta = false;
while ($oportunidades < 4 && !$caja_abierta){
    $elegido = readline("Inserte combinación: ");
    if ($elegido == $combinacion){
        echo "La caja fuerte se ha abierto satisfactoriamente";
        $caja_abierta = true;
    }else{
        $oportunidades++;
        echo "Lo siento, esa no es la combinación";
    }
}
echo (!$caja_abierta)?"Lo siento. Usted ya ha agotado las 4 posibilidades":"ABIERTA !!!";
?>