<?php
// Función para generar notificaciones emergentes
function generarNotificacionOferta($mensaje) {
    echo "<script type='text/javascript'>alert('$mensaje');</script>";
}

// Ejemplo de uso al acceder a la página
generarNotificacionOferta("¡Oferta especial! 20% de descuento en todos los paquetes a Europa.");
?>