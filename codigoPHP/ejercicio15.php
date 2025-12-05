<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

    // Array con el sueldo ganado por día de la semana
    $sueldoDia = [
        "Lunes" => 8,
        "Martes" => 6,
        "Miercoles" => 15,
        "Jueves" => 3,
        "Viernes" => 10,
        "Sabado" => 5,
        "Domingo" => 7
    ];

    // Inicializamos un acumulador para sumar el total del sueldo semanal
    $acumulador = 0;

    // Recorremos el array para obtener el sueldo de cada día y sumarlo al total
    foreach ($sueldoDia as $dia => $sueldo) {
        echo "El $dia hemos ganado $sueldo<br>";
        $acumulador+=$sueldo;
    }

    // Mostramos el total acumulado de la semana
    echo "Total: $acumulador" ;
?>