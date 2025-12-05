<?php

    /* @author Jesús Temprano Gallego
    *  @since 10/10/2025
    */

    // Ajustamos la zona horaria a Madrid
    date_default_timezone_set('Europe/Madrid');

    // Obtenemos el timestamp actual (segundos desde 1 de enero de 1970)
    $timestamp = time();


    // Mostramos el timestamp directamente
    echo $timestamp . "<br>";

    // Mostramos el timestamp formateado a "día-mes-año horas:minutos:segundos"
    echo date("d-m-Y H:i:s", $timestamp);
?>