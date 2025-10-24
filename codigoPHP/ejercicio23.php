<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario</title>
    <style>
        form *[obligatorio] {
            background-color: lightgoldenrodyellow;
        }
    </style>
</head>
<body>
    <h2>Cuestionario</h2>

    <?php
    /*  @author Jesús Temprano Gallego
     *  @since 20/10/2025
     */

    require_once "../core/231018libreriaValidacion.php";

    
    $entradaOK = true;
    $aErrores = ["nombre"=>'',"edad"=>'',"color"=>''];
    $aRespuestas = ["nombre"=>'',"edad"=>'',"color"=>''];

    if (!isset($_REQUEST["enviar"])) {
        $entradaOK = false;
    } else {
        $aRespuestas["nombre"] = $_REQUEST['nombre'];
        $aRespuestas["edad"]  = $_REQUEST['edad'];
        $aRespuestas["color"] = $_REQUEST['color'];
            
        if (trim($aRespuestas["nombre"]) === '') {
            $aErrores["nombre"] = "El nombre no puede estar vacío.";
        }

        if ($aRespuestas["edad"] === '' || !is_numeric($aRespuestas["edad"]) || $aRespuestas["edad"] < 0 || $aRespuestas["edad"] > 120) {
            $aErrores["edad"] = "La edad debe ser un número entre 0 y 120.";
        }

        if ($aRespuestas["color"] === '') {
            $aErrores["color"] = "Debes seleccionar un color.";
        }

        foreach ($aErrores as $campo => $mensaje) {
            if ($mensaje != '') {
                $entradaOK = false;
            }
        }
    }

    if ($entradaOK) {
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Nombre:</strong> {$aRespuestas['nombre']}</p>";
        echo "<p><strong>Edad:</strong> {$aRespuestas['edad']}</p>";
        echo "<p><strong>Color favorito:</strong> {$aRespuestas['color']}</p>";
    } else {
        ?>
        <form action="" method="post">
            <div>
                <label>Nombre:</label> <span style="color:red;"><?= $aErrores["nombre"] ?></span>
                <input type="text" name="nombre" value="<?= $aRespuestas['nombre'] ?>" obligatorio>
            </div>
            <br>

            <div>
                <label>Edad:</label> <span style="color:red;"><?= $aErrores["edad"] ?></span>
                <input type="number" name="edad" value="<?= $aRespuestas['edad'] ?>" obligatorio>
            </div>
            
            <br>

            <div>
                <label>Color favorito:</label> <span style="color:red;"><?= $aErrores['color'] ?></span>
                <select name="color" obligatorio>
                    <option value="">--Selecciona--</option>
                    <option value="Rojo" <?= $aRespuestas["color"] === "Rojo" ? 'selected' : '' ?>>Rojo</option>
                    <option value="Azul" <?= $aRespuestas["color"] === "Azul" ? 'selected' : '' ?>>Azul</option>
                    <option value="Verde" <?= $aRespuestas["color"] === "Verde" ? 'selected' : '' ?>>Verde</option>
                </select>
            </div>
            <br>

            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
    }
    ?>
</body>
</html>