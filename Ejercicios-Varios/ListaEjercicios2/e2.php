<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 2</title>
</head>
<body>
    <h1>Conversor de euros</h1>
    <form action="" method="post">
        Moneda <select name="moneda">
            <option value="-1">-- Elegir moneda --</option>
            <option value="pesetas">Pesetas</option>
            <option value="dolares">Dólares</option>
        </select>
        Cantidad <input type="number" name="cantidad" value="<?= @$_POST['cantidad']?>"/>
        <input type="submit" value="Convertir" name="submit" />
    </form>
    <?php
    $dolar = 1.07;
    $peseta = 166.386;
    if (isset($_POST['submit']) && $_POST['moneda'] != -1){
        $cantidad = $_POST['cantidad'];
        $moneda = $_POST['moneda'];
        $valor = $_POST['moneda']=="pesetas"?$peseta:$dolar;
        echo "$cantidad euros corresponde a ".($cantidad*$valor)." $moneda"; 
    }
    ?>
</body>
</html>