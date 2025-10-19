<?php

    /*  @author Jesús Temprano Gallego
     *  @since //
     */

    foreach ($GLOBALS as $nombre => $valor) {
        echo $nombre . ":";
        foreach ($valor as $clave => $dato) {
            print_r($valorDato . ":");
        }
        echo "<br>";
    }
?>