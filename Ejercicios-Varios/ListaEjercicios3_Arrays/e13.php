<?php
// Creo el array asociativo
$diccionario = array(
    "casa" => "house",
    "perro" => "dog",
    "gato" => "cat",
    "coche" => "car",
    "árbol" => "tree",
    "sol" => "sun",
    "luna" => "moon",
    "agua" => "water",
    "fuego" => "fire",
    "libro" => "book",
    "amigo" => "friend",
    "ciudad" => "city",
    "montaña" => "mountain",
    "playa" => "beach",
    "tiempo" => "weather",
    "comida" => "food",
    "trabajo" => "work",
    "juego" => "game",
    "música" => "music"
);
// Creo un array con sólo las palabras en castellano

foreach($diccionario AS $castellano => $ingles){
    $palabras[] = $castellano;
}
// Desordeno al axar el array
shuffle($palabras);
var_dump($palabras);

// Creo un contador para los aciertos
$aciertos = 0;
// Presento las palabras
for($i=0; $i<5; $i++){
    // Solicito la palabra en inglés
    $respuesta = readline("Inserte la traducción a inglés de $palabras[$i]: ");
    if ($respuesta == $diccionario[$palabras[$i]]){
        $aciertos++;
    }
}
echo "\nHa acertado $aciertos. Ha fallado ".(5-$aciertos);
