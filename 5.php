<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaja por Chile</title>
    <link rel="stylesheet" href="prueba.css">
    
    <!-- Aquí no necesitas colocar PHP dentro de una etiqueta <script> -->
</head>
<body>
    <div class="A">
        <nav class="navegacion">
            <a href="Principal.html">Inicio</a>
            <a href="Promociones.html">Promociones</a>
            <a href="Ayuda.html">Ayuda</a>
            <button class="btn">Iniciar Sesión</button>
        </nav>
        <center><h1><pre>Aprovecha de viajar con las ofertas de Invierno 2024
que tenemos para ti !!</pre></h1></center>
    </div>

    <!-- Aquí colocamos PHP para generar la notificación -->
    <?php
    // Definición de la función PHP para generar la notificación
    function generarNotificacionOferta($mensaje) {
        // Imprimir el script de alerta JavaScript
        echo "<script type='text/javascript'>alert('$mensaje');</script>";
    }

    // Llamar a la función PHP para generar la notificación con el mensaje deseado
    generarNotificacionOferta("¡Oferta especial! 20% de descuento en todos los paquetes a Europa.");
    ?>

    <form action="recuperacion.php" method="POST">
        <!-- Aquí va tu formulario -->
        <label for="nombreHotel">Nombre del Hotel:</label>
        <input type="text" id="nombreHotel" name="nombreHotel" required><br>
        <label for="ciudad">Ciudad de destino:</label>
        <select id="ciudad" name="ciudad">
            <option value="ar">Arica</option>
            <option value="vi">Viña del Mar</option>
            <option value="pu">Punta Arenas</option>
        </select><br>
        <label for="fechaViaje">Fecha de Viaje:</label>
        <input type="date" id="fechaViaje" name="fechaViaje" required><br>
        <label for="duracionViaje">Duración del Viaje (días):</label>
        <input type="number" id="duracionViaje" name="duracionViaje" required><br>
        <input type="submit" value="Buscar">
    </form>

</body>

</html>