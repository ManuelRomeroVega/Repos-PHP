<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 5</title>
    <script>
        function Calcula(){
            var n = parseInt(document.getElementById("numeroJS").value);
            var factorial = 1;
            for (let i=1;i<=n;i++){
                factorial *= i;
            }
            document.getElementById("resultado").innerHTML = n+"!="+factorial;
        }
    </script>
</head>
<body>
    <!-- Proceso en JavaScript -->
    <h1>Factorial de un número en Javascript</h1>
    Número <input type="number" id="numeroJS" />
    <input type="button" onclick="Calcula()" value="Calcular factorial JS">
    <p id="resultado"></p>

    <!-- Proceso en PHP -->
    <h1>Factorial de un número en PHP</h1>
    <form action="" method="POST">
    Número <input type="number" name="numeroPHP" />
    <input type="submit" value="Calcular Factorial PHP" />
    </form>
    <?php
        if (isset($_POST['numeroPHP'])){
            $n = $_POST['numeroPHP'];
            $factorial = 1;
            for ($i=1;$i<=$n;$i++){
                $factorial *= $i;
            }
            echo "$n!=$factorial";
        }
    ?>
</body>
</html>