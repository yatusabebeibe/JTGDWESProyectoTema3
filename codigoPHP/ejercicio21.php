<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario</title>
</head>
<body>
    <h2>Cuestionario</h2>
    <form action="Tratamiento.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Edad:</label>
        <input type="number" name="edad" min="0" max="120"><br><br>

        <label>Color favorito:</label>
        <select name="color" required>
            <option value="Rojo">Rojo</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
            <option value="Amarillo">Amarillo</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
