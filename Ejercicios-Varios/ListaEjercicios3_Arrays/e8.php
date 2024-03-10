<?php
    define("TOPE",8);
    // Guardamos en un array mediante un formulario
    echo "<form action=''>";
    for ($i=0;$i<TOPE;$i++){
       echo "Número $i: <input type='number' name='n$i'/><br>";
    }
    echo "<input type='submit' name='enviar' />";
    echo "</form>";
    if (isset($_GET['enviar']))
    // Presentamos los pares en rojo y los impares en verde
    foreach($_GET AS $numero){
        if ($numero != 'enviar'){ 
            // Convertimos la cadena en un número
            $numero = (int)$numero;
            $color = ($numero%2 == 0)?"red":"green";
            echo "<span style='color:$color'>$numero </span>";
        }
    }