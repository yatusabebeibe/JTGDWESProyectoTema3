<?php

    /*  @author Jesús Temprano Gallego
     *  @since 10/10/2025
     */

     date_default_timezone_set('Europe/Lisbon');
     setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');
     
    $tFecha = new DateTime();
    echo strftime('%d-%m-%Y %H:%M:%S', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%Y', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%B', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%A', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%d %B %Y', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%H:%M', $tFecha->getTimestamp()) . "<br>";
    echo strftime('%H:%M:%S', $tFecha->getTimestamp()) . "<br>";
?>