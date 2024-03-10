<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado<br>";
    }
} else {
    echo "No se proporcionó un número en la URL.";
}
?>
</body>
</html>
