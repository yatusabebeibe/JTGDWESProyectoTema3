<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario</title>
    <style>
        * {font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
        form *[obligatorio] {
            background-color: lightgoldenrodyellow;
        }
        body {
            text-align: center;
            margin-top: 100px;
            font-weight: bold;
            & > form {
                min-width: 350px;
                margin: 0 auto;
                width: max-content;
                border: 2px solid black;
                padding: 50px 40px;
                border-radius: 20px;
                box-shadow: 3px 3px 10px #0000008e;
            }
        }

        #campos {
            margin: 0 auto;
            /* width: max-content; */
            text-align: left;

            & > div {
                position: relative;
                * {display: block;}
                input {width: 100%; max-width: 200px;}
                .errorCampo {
                    font-size: 12px;
                    min-height: 14px;
                }
            }
        }
    </style>
</head>
<body>
    <h1>Ejercicio 24</h1>

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
            
        if (!empty(validacionFormularios::comprobarAlfabetico(cadena:$aRespuestas["nombre"],obligatorio: 1))) {
            $aErrores["nombre"] = "El nombre no puede estar vacío.";
        }

        if (!is_null(validacionFormularios::comprobarEntero($aRespuestas["edad"], 120, 0, 1))) {
            $aErrores["edad"] = "La edad debe ser un número entre 0 y 120.";
        }

        if (empty($aRespuestas["color"])) {
            $aErrores["color"] = "Debes seleccionar un color.";
        }

        foreach ($aErrores as $mensaje) {
            if (empty($mensaje)) $entradaOK = false;
        }
    }

    if ($entradaOK) {
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Nombre:</strong> {$aRespuestas['nombre']}</p>";
        echo "<p><strong>Edad:</strong> {$aRespuestas['edad']}</p>";
        echo "<p><strong>Color favorito:</strong> {$aRespuestas['color']}</p>";
    } else {
        ?>
        <form method="post">
            <div id="campos">
                <div>
                    <label class="tituloCampo">Nombre:</label>
                    <input type="text" name="nombre" value="<?= $aRespuestas['nombre'] ?>" obligatorio>
                    <span class="errorCampo" style="color:red;"><?= $aErrores["nombre"] ?></span>
                </div>
                <br>

                <div>
                    <label class="tituloCampo">Edad:</label>
                    <input type="number" name="edad" value="<?= $aRespuestas['edad'] ?>" obligatorio>
                    <span class="errorCampo" style="color:red;"><?= $aErrores["edad"] ?></span>
                </div>
                
                <br>

                <div>
                    <label class="tituloCampo">Color favorito:</label>
                    <select name="color" obligatorio>
                        <option value="">--Selecciona--</option>
                        <option value="Rojo" <?= $aRespuestas["color"] === "Rojo" ? 'selected' : '' ?>>Rojo</option>
                        <option value="Azul" <?= $aRespuestas["color"] === "Azul" ? 'selected' : '' ?>>Azul</option>
                        <option value="Verde" <?= $aRespuestas["color"] === "Verde" ? 'selected' : '' ?>>Verde</option>
                    </select>
                    <span class="errorCampo" style="color:red;"><?= $aErrores['color'] ?></span>
                </div>
                <br>

                <input type="submit" name="enviar" value="Enviar">
            </div>
        </form>
        <?php
    }
    ?>
</body>
</html>