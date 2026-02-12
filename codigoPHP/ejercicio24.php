<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <h1>Ejercicio 24</h1>

    <?php
    /*  @author Jesús Temprano Gallego
     *  @since 21/01/2026
     */

    require_once "../core/231018libreriaValidacion.php";

    // Variables generales para gestionar los datos del formulario
    $entradaOK = true; // Se pone a false si el cliente no se envia datos o si los datos estan mal
    $aErrores = ["nombre"=>'',"edad"=>'',"color"=>''];
    $aRespuestas = ["nombre"=>'',"edad"=>'',"color"=>''];

    if (!isset($_REQUEST["enviar"])) { // Si hemos cargado la pagina por primera vez
        $entradaOK = false;
    } else {

    // Recogemos y validamos los datos enviados por el cliente
    $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'] ?? '', minTamanio:3, obligatorio:1);
    $aErrores['edad']   = validacionFormularios::comprobarEntero($_REQUEST['edad'] ?? '', 120, 0, 1);
    $aErrores['color']  = empty($_REQUEST['color'] ?? '') ? "Debes seleccionar un color." : '';

        // Comprobamos si hay errores
        foreach ($aErrores as $mensaje) {
            if (!empty($mensaje)) $entradaOK = false;
        }
    }
?>

<?php if ($entradaOK): // Si no habia errores se muestran los datos ?>
    <?php
        $aRespuestas['nombre'] = $_REQUEST['nombre'];
        $aRespuestas['edad'] = $_REQUEST['edad'];
        $aRespuestas['color'] = $_REQUEST['color'];
    ?>
    <h3>Resultados:</h3>
    <p><strong>Nombre:</strong> <?= $aRespuestas['nombre'] ?></p>
    <p><strong>Edad:</strong> <?= $aRespuestas['edad'] ?></p>
    <p><strong>Color favorito:</strong> <?= $aRespuestas['color'] ?></p>
    <br>
    <a href="<?= $_SERVER['PHP_SELF'] ?>" class="button">Volver al formulario</a>

<?php else: ?>
    <!-- Mostramos el formulario -->
    <form method="post">
        <div id="campos">
            <div>
                <label class="tituloCampo">Nombre:</label>
                <!-- Ponemos los valores del array respuesta para que el usuario no tenga que escribirlo de nuevo en caso de error, y si ya se ha procesado lo eliminamos -->
                <input type="text" name="nombre" value="<?= $entradaOK ? "" : $_REQUEST['nombre'] ?>" obligatorio>
                <!-- Si ha habido un error lo muestra -->
                <span class="errorCampo" style="color:red;"><?= $aErrores["nombre"] ?></span>
            </div>
            <br>

            <div>
                <label class="tituloCampo">Edad:</label>
                <input type="number" name="edad" value="<?= $entradaOK ? "" : $_REQUEST['edad'] ?>" obligatorio>
                <!-- Si ha habido un error lo muestra -->
                <span class="errorCampo" style="color:red;"><?= $aErrores["edad"] ?></span>
            </div>
            <br>

            <div>
                <label class="tituloCampo">Color favorito:</label>
                <select name="color" obligatorio>
                    <option value="">--Selecciona--</option>
                    <option value="Rojo" <?= $_REQUEST["color"] === "Rojo" ? 'selected' : '' ?>>Rojo</option>
                    <option value="Azul" <?= $_REQUEST["color"] === "Azul" ? 'selected' : '' ?>>Azul</option>
                    <option value="Verde" <?= $_REQUEST["color"] === "Verde" ? 'selected' : '' ?>>Verde</option>
                </select>
                <!-- Si ha habido un error lo muestra -->
                <span class="errorCampo" style="color:red;"><?= $aErrores['color'] ?></span>
            </div>
            <br>

            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
<?php endif; ?>
</body>
</html>