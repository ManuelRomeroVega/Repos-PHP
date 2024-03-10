<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1 Ejercicio 4</title>
</head>

<body>
    <!-- Versión 1. Todo con PHP -->
    <?php
    $palabras = array(
        "cat" => "gato",
        "dog" => "perro",
        "butterfly" => "mariposa"
    );
    asort($palabras);
    echo "<table>";
    echo "<tr><th>Inglés</th><th>Castellano</th></tr>";
    foreach ($palabras as $ingles => $castellano) {
        echo "<tr><td>$ingles</td><td>$castellano</td></tr>";
    }
    echo "</table>";
    ?>

    <!-- Versión 2. Mezcla PHP y HTML -->

    <table>
        <tr>
            <th>Inglés</th>
            <th>Castellano</th>
        </tr>
        <?php
        foreach ($palabras as $ingles => $castellano) {
        ?>
            <tr>
                <td><?= $ingles ?></td>
                <td><?= $castellano ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>