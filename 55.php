<!-- Página que muestra los paquetes turísticos disponibles -->
<?php
session_start(); // Iniciar o reanudar la sesión existente

// Simulación de productos (paquetes turísticos)
$productos = [
    ['id' => 1, 'nombre' => 'Paquete A', 'precio' => 500],
    ['id' => 2, 'nombre' => 'Paquete B', 'precio' => 700],
    ['id' => 3, 'nombre' => 'Paquete C', 'precio' => 900]
];

// Agregar producto al carrito
if (isset($_GET['agregar']) && !empty($_GET['agregar'])) {
    $producto_id = $_GET['agregar'];
    // Verificar si el producto existe y agregarlo al carrito
    if (array_key_exists($producto_id, $productos)) {
        // Inicializar el carrito si no existe
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        // Agregar el producto al carrito
        $_SESSION['carrito'][] = $productos[$producto_id];
    }
}

// Mostrar los productos disponibles
foreach ($productos as $producto) {
    echo '<p>' . $producto['nombre'] . ' - $' . $producto['precio'] . ' <a href="?agregar=' . $producto['id'] . '">Agregar al carrito</a></p>';
}

// Mostrar el contenido del carrito
echo '<h2>Carrito de Compra:</h2>';
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    echo '<ul>';
    foreach ($_SESSION['carrito'] as $item) {
        echo '<li>' . $item['nombre'] . ' - $' . $item['precio'] . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>El carrito está vacío</p>';
}
?>
