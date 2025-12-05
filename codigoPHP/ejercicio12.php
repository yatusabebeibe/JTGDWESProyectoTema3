<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

    // Creamos un array con todas las superglobales y sus valores actuales
    $variablesSuperglobales = [
        '_SESSION' => $_SESSION ?? [], // Lo crea si no esta creado
        '_COOKIE' => $_COOKIE,
        '_SERVER' => $_SERVER,
        '_REQUEST' => $_REQUEST,
        '_GET' => $_GET,
        '_POST' => $_POST,
        '_FILES' => $_FILES,
        '_ENV' => $_ENV
    ];

    // Recorremos cada superglobal para mostrar su contenido
    foreach ($variablesSuperglobales as $nombresVariables=>$variables) {
        echo "<h1>" . $nombresVariables . "</h1>";

        // Recorremos los pares clave => valor de cada superglobal
        foreach ($variables as $valor => $datos) {
            echo "<b>" . $valor . "</b>: " . $datos;
            echo "<br>";
        }
        echo "<br>";
    }
?>