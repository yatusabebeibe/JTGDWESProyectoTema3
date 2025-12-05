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
                min-width: 275px;
                margin: 0 auto;
                width: max-content;
                border: 2px solid black;
                padding: 50px 40px;
                border-radius: 20px;
                box-shadow: 3px 3px 10px #0000008e;
            }
        }

        *[obligatorio] {background: #fbff0042;}
        #campos {
            margin: 0 auto;
            width: max-content;
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
    <h1>Ejercicio 23</h1>

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

        foreach ($aErrores as $mensaje) {
            if (!empty($mensaje)) $entradaOK = false;
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
                    <input type="text" name="nombre" obligatorio>
                    <span class="errorCampo" style="color:red;"><?= $aErrores["nombre"] ?></span>
                </div>
                <br>

                <div>
                    <label class="tituloCampo">Edad:</label>
                    <input type="number" name="edad" obligatorio>
                    <span class="errorCampo" style="color:red;"><?= $aErrores["edad"] ?></span>
                </div>
                
                <br>

                <div>
                    <label class="tituloCampo">Color favorito:</label>
                    <select name="color" obligatorio>
                        <option value="">--Selecciona--</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Azul">Azul</option>
                        <option value="Verde">Verde</option>
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