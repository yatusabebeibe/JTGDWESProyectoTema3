<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario</title>
</head>
<body>
    <h2>Cuestionario</h2>

    <?php
    /*  @author Jesús Temprano Gallego
     *  @since 20/10/2025
     */

    // Comprobamos si se han enviado datos
    if (isset($_REQUEST['submit'])) {
        $nombre = $_REQUEST['nombre'] ?? '';
        $edad = $_REQUEST['edad'] ?? '';
        $color = $_REQUEST['color'] ?? '';

        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Edad:</strong> " . $edad . "</p>";
        echo "<p><strong>Color favorito:</strong> " . $color . "</p>";
        exit;
    } else {
    ?>

    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Edad:</label>
        <input type="number" name="edad" min="0" max="120"><br><br>

        <label>Color favorito:</label>
        <select name="color" required>
            <option value="Rojo">Rojo</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
        </select><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php } ?>
</body>
</html>
