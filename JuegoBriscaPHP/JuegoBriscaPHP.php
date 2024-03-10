<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La brisca</title>
</head>
<body>
    <h1>Juego de la brisca</h1>
    <?php
        // Defino la cantidad de cartas a escoger
        define("CANTIDAD", 10);

        // Creo la baraja completa con los valores del 1 al 40
        for ($i=1;$i<=40; $i++){
            $baraja[] = $i;
        }

        // "Barajo" con la función shuffle(array) que desordena los valores al azar   
        shuffle($baraja);

        /* Creo un array asociativo con los puntos de cada número
        para obtener el resto de dividir por 10 y asi saber si es un as, un 2, ... o un rey*/
        $puntos = array(
            1 => 11, 2 => 0, 3 => 10, 4 => 0, 5 => 0,
            6 => 0, 7 => 0, 8 => 2, 9 => 3, 0 => 4
        );

        // Preparo una variable que acumule la suma de los puntos de las cartas
        $suma = 0;
        
        // Obtengo las 10 primeras cartas de la baraja (ya están desordenadas)
        for ($i=0;$i<CANTIDAD;$i++){
            // Presento la carta
            echo "<img src='./Baraja/$baraja[$i].jpg'>";
            // Añado el valor de la carta a la suma (para ello obtengo el resto de dividir entre 10)
            $suma += $puntos[$baraja[$i]%10];
        }
        // Presento, finalmente, la suma de puntos según la brisca
        echo "<h2>La suma resulta $suma</h2>";
        
        // Pongo un enlace a la misma página con el array $_SERVER
        echo "<a href='$_SERVER[PHP_SELF]'>Volver a cargar</a>"
    ?>
</body>
</html>