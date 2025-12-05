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

    // Mostramos el total de la semana usando la función calcularSueldoSemanal
    echo "Total: " . calcularSueldoSemanal($sueldoDia);

    // Función que recibe un array con los sueldos diarios y devuelve el total semanal
    function calcularSueldoSemanal($sueldoPorDia) {
        $acumulador = 0;

        // Recorremos cada día sumando el sueldo al acumulador
        foreach ($sueldoPorDia as $dia => $sueldo) {
            $acumulador+=$sueldo;
        }

        // Devolvemos el total acumulado
        return $acumulador;
    }
?>