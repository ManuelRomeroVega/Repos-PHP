<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 6</title>
</head>
<body>
    <h1>Números perfectos</h1>
    <form action="">
        Número <input type="number" name="numero" value="<?=@$_GET['numero']?>"/>
        <input type="submit" value="Comprobar si es perfecto" />
    </form>
    <?php
        function es_perfecto($n){
            $suma = 0;
            for ($i=1;$i<=$n/2;$i++){
                if ($n%$i == 0){
                    $suma += $i;
                }
            }
            return $suma == $n;
        }

        if (isset($_GET['numero']) && !empty($_GET['numero'])){
            echo (es_perfecto($_GET['numero']))?"Es perfecto":"No es perfecto";
        }
    ?>
</body>
</html>