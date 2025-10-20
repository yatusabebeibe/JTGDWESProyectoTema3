<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

    $sueldoDia = [
         "Lunes" => 8,
         "Martes" => 6,
         "Miercoles" => 15,
         "Jueves" => 3,
         "Viernes" => 10,
         "Sabado" => 5,
         "Domingo" => 7
     ];
    
    
     echo "Total: " . calcularSueldoSemanal($sueldoDia);
    
     function calcularSueldoSemanal($sueldoPorDia) {
         $acumulador = 0;
        foreach ($sueldoPorDia as $dia => $sueldo) {
            $acumulador+=$sueldo;
        }
        return $acumulador;
    }
?>