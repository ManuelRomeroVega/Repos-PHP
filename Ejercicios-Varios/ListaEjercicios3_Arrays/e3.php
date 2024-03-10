<?php
    $peliculas = array("Cinema Paradiso","Casablanca","La vida de Brian");
    // Recorro el array completo
    for ($i=0; $i<count($peliculas); $i++){
        $posicion = $i + 1;
        echo "<p>Película $posicion:$peliculas[$i]</p>";
    }

    // Añado un nuevo elemento
    $peliculas[3] = "El Padrino";
?>