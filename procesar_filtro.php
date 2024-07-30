<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'FiltroViaje.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST['nombreHotel'] ?? '';
    $ciudad = $_POST['ciudad'] ?? '';
    $fechaViaje = $_POST['fechaViaje'] ?? '';
    $duracionViaje = $_POST['duracionViaje'] ?? '';

    $filtro = new FiltroViaje($nombreHotel, $ciudad, $fechaViaje, $duracionViaje);
    $filtro->mostrarInfo();
    echo "<br>";
    $filtro->buscarPaquetes();
}
?>