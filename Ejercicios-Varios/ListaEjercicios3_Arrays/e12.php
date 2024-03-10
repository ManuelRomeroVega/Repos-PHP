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
// Solicito la palabra en castellano
$palabra = readline("Inserte una palabra en castellano: ");
// Compruebo si existe para que no dé errores
if (isset($diccionario[$palabra])){
    echo "La traducción de '$palabra' a inglés es '$diccionario[$palabra]'";
} else {
    echo "No existe esa palabra en nuestro diccionario";
}