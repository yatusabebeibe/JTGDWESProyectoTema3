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

    $nombre = $_REQUEST['nombre'] ?? '';
    $edad = $_REQUEST['edad'] ?? '';
    $color = $_REQUEST['color'] ?? '';
    $errores = [];

    // Comprobamos si se ha enviado el formulario
    if (isset($_REQUEST['submit'])) {
        // Validamos campos
        if (trim($nombre) === '') {
            $errores[] = "El nombre no puede estar vacío.";
        }

        if ($edad === '' || !is_numeric($edad) || $edad < 0 || $edad > 120) {
            $errores[] = "La edad debe ser un número entre 0 y 120.";
        }

        if ($color === '') {
            $errores[] = "Debes seleccionar un color.";
        }

        // Si no hay errores, mostramos resultados
        if (empty($errores)) {
            echo "<h3>Resultados:</h3>";
            echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
            echo "<p><strong>Edad:</strong> " . $edad . "</p>";
            echo "<p><strong>Color favorito:</strong> " . $color . "</p>";
        }
    }

    // Muestra el formulario si no se ha enviado o si hay errores
    if (!isset($_REQUEST['submit']) || !empty($errores)) {
?>
    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $nombre ?>"><br><br>

        <label>Edad:</label>
        <input type="number" name="edad" min="0" max="120" value="<?= $edad ?>"><br><br>

        <label>Color favorito:</label>
        <select name="color">
            <option value="">--Selecciona--</option>
            <option value="Rojo" <?= $color === "Rojo" ? 'selected' : '' ?>>Rojo</option>
            <option value="Azul" <?= $color === "Azul" ? 'selected' : '' ?>>Azul</option>
            <option value="Verde" <?= $color === "Verde" ? 'selected' : '' ?>>Verde</option>
        </select><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
    if (!empty($errores)) {
            echo "<ul style='color:red;'>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
?>
</body>
</html>
