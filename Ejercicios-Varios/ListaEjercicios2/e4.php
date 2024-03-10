<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 4</title>
</head>
<body>
    <?php
        if (isset($_GET['numero'])){
            $n = $_GET['numero'];
            $cont = 0;
            $sum = 0;
            $txt = "";
            for ($i=1;$i<=$n;$i++){
                if ($i%3 == 0){
                    $cont++;
                    $sum += $i;
                    $txt .= "$i, ";
                }
            }
            $txt = substr($txt,0,-2);
            echo "Los múltiplos de 3 son : $txt";
            echo "<br>La cantidad múltiplos de 3 comprendidos entre 1 y $n resulta $cont";
            echo "<br>La suma de los números múltiplos de 3 comprendidos entre 1 y $n resulta $sum";
        }else{
            echo "Debe enviar un número por la URL";
        }
    ?>
    
</body>
</html>