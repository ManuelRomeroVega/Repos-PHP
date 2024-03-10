<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Arrays Ejercicio 14</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .blue {
            color: blue;
        }

        .green {
            color: green;
        }
    </style>
</head>
<body>

<?php
// Función para generar números únicos en el rango especificado
function generarNumeroUnico($min, $max, $array) {
    $numero = mt_rand($min, $max);
    while (in_array($numero, $array)) {
        $numero = mt_rand($min, $max);
    }
    return $numero;
}

// Crear matriz bidimensional
$matriz = array();

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        $matriz[$i][$j] = generarNumeroUnico(100, 999, $matriz);
    }
}

// Encontrar el mínimo y sus coordenadas
$minimo = PHP_INT_MAX;
$minFila = 0;
$minColumna = 0;

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        if ($matriz[$i][$j] < $minimo) {
            $minimo = $matriz[$i][$j];
            $minFila = $i;
            $minColumna = $j;
        }
    }
}

// Mostrar la matriz en HTML
echo '<table>';

for ($i = 0; $i < 6; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 9; $j++) {
        $numero = $matriz[$i][$j];
        $color = 'black';

        if ($i + $j == $minFila + $minColumna || $i - $j == $minFila - $minColumna) {
            $color = 'green'; // Números en las diagonales del mínimo en verde
        }

        if ($i == $minFila && $j == $minColumna) {
            $color = 'blue'; // Mínimo en azul
        }

        echo '<td class="' . $color . '">' . $numero . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>