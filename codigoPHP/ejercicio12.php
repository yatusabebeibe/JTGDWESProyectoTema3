<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

     $variablesSuperglobales = [
        '_SERVER' => $_SERVER,
        '_GET' => $_GET,
        '_POST' => $_POST,
        '_FILES' => $_FILES,
        '_COOKIE' => $_COOKIE,
        '_SESSION' => $_SESSION ?? [], // Lo crea si no esta creado
        '_REQUEST' => $_REQUEST,
        '_ENV' => $_ENV
    ];

    foreach ($variablesSuperglobales as $nombresVariables=>$variables) {
        echo "<h1>" . $nombresVariables . "</h1>";
        foreach ($variables as $valor => $datos) {
            echo "<b>" . $valor . "</b>: " . $datos;
            echo "<br>";
        }
        echo "<br>";
    }
?>