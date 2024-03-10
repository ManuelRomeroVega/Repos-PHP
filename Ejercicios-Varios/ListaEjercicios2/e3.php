<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 3</title>
</head>
<body>
    <form action="" method="POST">
        Número 1: <input type="number" name="num1" />
        Número 2: <input type="number" name="num2" />
        <input type="submit" name="submit" /> 
    </form>
    <?php
        if (isset($_REQUEST['submit']) && !empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
            $num1 = $_REQUEST['num1'];
            $num2 = $_REQUEST['num2'];
            echo "$num1 + $num2 = ".($num1 + $num2)."<br>";
            echo "$num1 - $num2 = ".($num1 - $num2)."<br>";
            echo "$num1 * $num2 = ".($num1 * $num2)."<br>";
            echo "$num1 / $num2 = ".($num1 / $num2)."<br>";
        }else{
            echo "Por favor, inserte dos números";
        }
    ?>
    
</body>
</html>