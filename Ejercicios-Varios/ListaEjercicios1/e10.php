<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1 Ejercicio 10</title>
</head>
<body>
    <?php
    if (isset($_GET['N'])){
        $n = $_GET['N'];
        if ($n < 0 || $n > 20){
            echo "El número pasado por GET es mayor que 20";
        }else{
            echo "<ul>";
            for ($i=0;$i<$n;$i++){
                echo "<li>".(2**$i)."</li>";
            }
            echo "</ul>";
        }
    }else{
        echo "Debe pasar el parámetro N por GET";
    }
    ?>
</body>
</html>