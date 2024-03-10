<?php
// Se debe ejecutar en línea de comandos (terminal)
// Opción 1. Usando variables mínimo y
/* $minimo = PHP_INT_MAX;
$maximo = PHP_INT_MIN;


for ($i=0;$i<10;$i++){
    $valor = readline("Número: ");
    if ($valor < $minimo){
        $minimo = $valor;
    }
    if ($valor > $maximo){
        $maximo = $valor;
    }
    //echo "Por ahora el mínimo es $minimo y el máximo es $maximo\n";
}

echo "El mínimo es $minimo y el máximo $maximo"; */

// Opción 2: Insertar los elementos solicitados en un array y usar las funciones min() y max()

for ($i=0;$i<10;$i++){
    $numeros[$i] = readline("Número: ");
}
echo "El valor mínimo es ".min($numeros)." y el máximo es ".max($numeros);
