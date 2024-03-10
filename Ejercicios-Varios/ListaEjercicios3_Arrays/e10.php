<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 3 Ejercicio 10</title>

    <?php
        // Función que presenta un array y sus índices en forma de tabla
        function presenta($array, $texto){
            echo "<h1 style='text-align:center'>$texto</h1>";
            // Índices
            echo "<table>";
            echo "<tr>";
            for ($i=0;$i<10;$i++){
                echo "<td width='100'>$i</td>";
            }
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
            // Valores
            echo "<table>";
            echo "<tr>";
            for ($i=0;$i<10;$i++){
                echo "<td width='100'>$array[$i]</td>";
            }
            echo "</tr>";
            echo "</table>";  
            echo "<br>";   
        }
    
    // Función que comprueba si un número es primo
    function es_primo($n){
        $esprimo = true;
        for ($i=2;$i<=sqrt($n) && $esprimo; $i++){
            if ($n%$i == 0){
                $esprimo = false;
            }
        }
        return $esprimo;
    }
    ?>

</head>
<body>
    <form action=''>
        <?php
        for ($i=0;$i<10;$i++){
            echo "<label for='n$i'>Número ".($i+1)." </label>";
            echo "<input type='number' name='n$i' value='".@$_GET['n$i']."'/><br>";
        }
        ?>
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_GET['submit'])){
            // Almaceno los números en un array
            for ($i=0;$i<10;$i++){
                $numeros[$i] = (int) $_GET["n$i"];
                // Aprovecho para crear los arrays primos y no_primos
                if (es_primo($numeros[$i])){
                    $primos[] = $numeros[$i];
                } else{ 
                    $no_primos[] = $numeros[$i];
                }
            }
            // Presento el array inicial
            presenta($numeros,"Array inicial");

            // Combino los arrays modificando el original
            $numeros = array_merge($primos,$no_primos);

            // Presento el array final
            presenta($numeros,"Array final");
        }

    ?>
</body>
</html>