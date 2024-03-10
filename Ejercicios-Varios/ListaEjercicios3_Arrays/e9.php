<?php
    // Generamos un array aleatorio
    $a = 0;
    $b = 0;
    for ($i=0;$i<20;$i++){
        $numeros[$i] = rand(0,100);
        // Aprovechamos para insertarlo en el array correcto
        if ($numeros[$i]%2 == 0){
            $pares[$a++] = $numeros[$i];
        } else 
            $impares[$b++] = $numeros[$i];
    }
    // Fusiono los dos arrays en el original
    $numeros = array_merge($pares,$impares);
    //var_dump($numeros);
?>