<?php
session_start();

// Función para iniciar la cuenta regresiva
function iniciarCuentaRegresiva($segundos) {
    $_SESSION['segundos_atras'] = $segundos;
    $_SESSION['iniciar'] = time();
}

// Función para obtener el tiempo restante en la cuenta regresiva
function obtenerTiempoRestante() {
    return $_SESSION['segundos_atras'] - (time() - $_SESSION['iniciar']);
}

// Función para limpiar la sesión después de que la cuenta regresiva haya terminado
function limpiarSesion() {
    unset($_SESSION['segundos_atras'], $_SESSION['iniciar']);
}

// Verificar si se envió el formulario (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // validar numero entero positivo
    $segundos = filter_input(INPUT_POST, 'segundos', FILTER_VALIDATE_INT);

    // Iniciar la cuenta regresiva si el valor es válido
    // Mostrar un mensaje de error si el valor no es válido
    if ($segundos !== false && $segundos > 0) {
        iniciarCuentaRegresiva($segundos);
    } else {
        echo "<h2>Error: Ingrese un número entero positivo válido.</h2>";
    }
}
// Verificar si hay una cuenta regresiva en curso
if (isset($_SESSION['segundos_atras'])) {
    $segundos_restantes = obtenerTiempoRestante();
    // Verificar si el tiempo restante es mayor que cero
    if ($segundos_restantes > 0) {
        echo "<h2>Cuenta Regresiva:</h2>";
        echo "<p>Segundos restantes: $segundos_restantes</p>";
        echo '<meta http-equiv="refresh" content="1">';
    } else {
        // Limpia la sesion
        limpiarSesion();
        echo "<h2>Cuenta Regresiva Finalizada</h2>";
    }
} else {
    // Mostrar un mensaje si la cuenta regresiva no se ha configurado
    echo "<h2>Configure la cuenta regresiva primero.</h2>";
}
?>

