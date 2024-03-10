<?php
define("N",20);

// Para usar números aleatorios se suele reiniciar la "semilla"
srand(time());
// Cargo los elementos del array tomados al azar
for ($i=0;$i<N;$i++){
    $numero[$i] = rand(1,100);
}
//var_dump($numero);
// Genero los nuevos arrays "cuadrado" y "cubo"
for ($i=0;$i<N;$i++){
    $cuadrado[$i] = $numero[$i] ** 2;
    $cubo[$i] = $numero[$i] ** 3;
}

// Presentamos en 3 columnas
/*echo "<table>";
echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
for ($i=0; $i<N; $i++){
    echo "<tr><td>$numero[$i]</td><td>$cuadrado[$i]</td><td>$cubo[$i]</td></tr>";
}
echo "</table>";
*/
for ($i=0; $i<N; $i++){
    echo "$numero[$i]\t$cuadrado[$i]\t$cubo[$i]\n";
}

?>