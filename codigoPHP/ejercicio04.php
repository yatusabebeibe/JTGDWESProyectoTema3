<?php

    /* @author Jesús Temprano Gallego
    *  @since 10/10/2025
    */

    // Ajustamos la zona horaria a Lisboa
    date_default_timezone_set('Europe/Lisbon');

    // Configuramos la localización a portugues para fechas y horas
    setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');


    // Creamos un objeto DateTime con la fecha y hora actual
    $tFecha = new DateTime();

    echo strftime('%d-%m-%Y %H:%M:%S', $tFecha->getTimestamp()) . "<br>"; // Mostramos la fecha y hora completa (día-mes-año horas:minutos:segundos)
    echo strftime('%Y', $tFecha->getTimestamp()) . "<br>"; // Mostramos solo el año
    echo strftime('%B', $tFecha->getTimestamp()) . "<br>"; // Mostramos el nombre del mes en español
    echo strftime('%A', $tFecha->getTimestamp()) . "<br>"; // Mostramos el nombre del día de la semana en español
    echo strftime('%d %B %Y', $tFecha->getTimestamp()) . "<br>"; // Mostramos la fecha en formato "día Mes Año"
    echo strftime('%H:%M', $tFecha->getTimestamp()) . "<br>"; // Mostramos solo la hora y minutos
    echo strftime('%H:%M:%S', $tFecha->getTimestamp()) . "<br>"; // Mostramos la hora completa con segundos
?>