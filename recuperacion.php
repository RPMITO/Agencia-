<?php
// procesar_filtro.php

include 'FiltroViaje.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST['nombreHotel'];
    $ciudad = $_POST['Ciudad'];
    $fechaViaje = $_POST['fechaViaje'];
    $duracionViaje = $_POST['duracionViaje'];

    $filtro = new FiltroViaje($nombreHotel, $ciudad, $fechaViaje, $duracionViaje);
    $filtro->mostrarInfo();
    $filtro->buscarPaquetes();
}
?>