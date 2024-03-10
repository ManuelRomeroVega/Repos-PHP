<?php
    // Generamos 100 números aletorios del 0 al 20:
    for ($i=0;$i<100;$i++){
        $numeros[$i] = rand(0,20);
        echo $numeros[$i]. " ";
    }
    $valor1 = readline("Valor 1: ");
    $valor2 = readline("Valor 2: ");

    // Recorro el array y cambio las ocurrencias del primer valor por el segundo y lo pongo en rojo
    for ($i=0; $i<count($numeros);$i++){
        if ($numeros[$i] == $valor1){
            $numeros[$i] = $valor2;
            echo "\e[1;31m$numeros[$i]\e[0m ";
        }else{
            echo "$numeros[$i] ";
        }
    }

?>