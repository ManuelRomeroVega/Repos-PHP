<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1 Ejercicio 9</title>
</head>
<body>
    <?php
    $n = 1;
    echo "<table>";
    for ($i=0;$i<10;$i++){
        $color = $i%2?'white':'grey';
        echo "<tr style='background-color:$color'>";
        for ($j=0;$j<10;$j++){
            echo "<td>$n</td>";
            $n++;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?> 
</body>
</html>