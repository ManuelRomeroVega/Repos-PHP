<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotación de Matriz</title>
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
    </style>
</head>
<body>

<?php

define("N",12);
// Función para generar números aleatorios en el rango especificado
function generarNumeroAleatorio($min, $max) {
    return mt_rand($min, $max);
}

// Crear matriz original
$matrizOriginal = array();

for ($i = 0; $i < N; $i++) {
    for ($j = 0; $j < N; $j++) {
        $matrizOriginal[$i][$j] = generarNumeroAleatorio(0, 100);
    }
}

// Función para rotar la matriz en el sentido de las agujas del reloj
function rotarMatriz($matriz) {
    $matrizRotada = array();

    for ($i = 0; $i < N; $i++) {
        for ($j = 0; $j < N; $j++) {
            // Calcular las nuevas coordenadas después de la rotación
            $nuevaFila = $j;
            $nuevaColumna = N - 1 - $i;

            // Asignar el valor en la nueva posición
            $matrizRotada[$nuevaFila][$nuevaColumna] = $matriz[$i][$j];
        }
    }

    return $matrizRotada;
}

// Rotar la matriz original
$matrizResultado = rotarMatriz($matrizOriginal);

// Mostrar la matriz original
echo '<h2>Matriz Original</h2>';
echo '<table>';

for ($i = 0; $i < N; $i++) {
    echo '<tr>';
    for ($j = 0; $j < N; $j++) {
        echo '<td>' . $matrizOriginal[$i][$j] . '</td>';
    }
    echo '</tr>';
}

echo '</table>';

// Mostrar la matriz resultado
echo '<h2>Matriz Resultado (Rotada)</h2>';
echo '<table>';

for ($i = 0; $i < N; $i++) {
    echo '<tr>';
    for ($j = 0; $j < N; $j++) {
        echo '<td>' . $matrizResultado[$i][$j] . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
