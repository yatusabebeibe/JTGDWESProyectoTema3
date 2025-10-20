<?php
    /*  @author Jesús Temprano Gallego
     *  @since 20/10/2025
     */

    // Usamos $_REQUEST para que funcione con GET o POST
    $nombre = $_REQUEST['nombre'] ?? '';
    $edad = $_REQUEST['edad'] ?? '';
    $color = $_REQUEST['color'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
    <h2>Resultados del Cuestionario</h2>
    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Color favorito:</strong> <?php echo $color; ?></p>
</body>
</html>
