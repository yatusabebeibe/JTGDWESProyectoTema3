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

        *[obligatorio] {background: #fbff0042;}
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

    
    // Variables generales para gestionar los datos del formulario
    $entradaOK = true; // Se pone a false si el cliente no se envia datos o si los datos estan mal
    $aErrores = ["nombre"=>'',"edad"=>'',"color"=>''];
    $aRespuestas = ["nombre"=>'',"edad"=>'',"color"=>'fds'];

    if (!isset($_REQUEST["enviar"])) { // Si hemos cargado la pagina por primera vez
        $entradaOK = false;
    } else {

        // Recogemos los datos enviados del cliente y los metemos en el array de respuestas
        $aRespuestas["nombre"] = $_REQUEST['nombre'];
        $aRespuestas["edad"]  = $_REQUEST['edad'];
        $aRespuestas["color"] = $_REQUEST['color'];

        // Comprobamos que el nombre no este vacio, contenga solo letras y un tamaño minimo de 3 caracteres
        if ($error = validacionFormularios::comprobarAlfabetico($aRespuestas["nombre"], minTamanio:3, obligatorio:1)) {
            $aErrores["nombre"] = $error; // Si da error se lo pasamos a el array de errores
        }

        // Comprobamos que la edad no este vacia, sea un entero, y que este entre 0 y 120
        if ($error = validacionFormularios::comprobarEntero($aRespuestas["edad"], 120, 0, 1)) {
            $aErrores["edad"] = $error; // Si da error se lo pasamos a el array de errores
        }

        // Comprobamos que se haya seleccionado un color
        if (empty($aRespuestas["color"])) {
            $aErrores["color"] = "Debes seleccionar un color.";
        }

        // Comprobamos si hay errores
        foreach ($aErrores as $mensaje) {
            if (!empty($mensaje)) $entradaOK = false;
        }
    }

    if ($entradaOK) { // Si no habia errores se muestran los datos
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Nombre:</strong> {$aRespuestas['nombre']}</p>";
        echo "<p><strong>Edad:</strong> {$aRespuestas['edad']}</p>";
        echo "<p><strong>Color favorito:</strong> {$aRespuestas['color']}</p>";
    } else {
        // Mostramos el formulario
        ?>
        <form method="post">
            <div id="campos">
                <div>
                    <label class="tituloCampo">Nombre:</label>
                    <!-- Ponemos los valores del array respuesta para que el usuario no tenga que escribirlo de nuevo en caso de error, y si ya se ha procesado lo eliminamos -->
                    <input type="text" name="nombre" value="<?= $entradaOK ? "" : $aRespuestas['nombre'] ?>" obligatorio>
                    <!-- Si ha habido un error lo muestra -->
                    <span class="errorCampo" style="color:red;"><?= $aErrores["nombre"] ?></span>
                </div>
                <br>

                <div>
                    <label class="tituloCampo">Edad:</label>
                    <input type="number" name="edad" value="<?= $entradaOK ? "" : $aRespuestas['edad'] ?>" obligatorio>
                    <!-- Si ha habido un error lo muestra -->
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
                    <!-- Si ha habido un error lo muestra -->
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