<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 7</title>
</head>
<body>
    <h1>Dibujando pirámides :-)</h1>
    Digite numero de filas
<form action="" method="post" >
<input type="number" name="num" value="3">
<select name="caracter">
    <option value="&#8986;">&#8986</option>
    <option value="&#128024;">&#128024</option>
    <option value="&#9924;">&#9924</option>
    <option value="&#128512;" selected>&#128512</option>
    <option value="&#9785;&#65039;">&#9785;&#65039</option>
</select>
<input type="submit" value="Construir pirámide">
</form>
<?php
    function crear_piramide ($filas, $c) {
        $cadena = "";
        for ($i = 1; $i <= $filas; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $cadena .= $c;
            }
            $cadena .= "<br>";
        }
        return $cadena;
    }

    $num=@$_POST['num'];
    echo crear_piramide($num,@$_POST['caracter']);
?>
</body>
</html>