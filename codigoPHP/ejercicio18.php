<?php

    /*  @author Jesús Temprano Gallego
     *  @since 20/10/2025
     */

    $teatro = Array();
     
    const nFILAS = 20;
    const nCOLUMNAS = 15;

    for ($fila = 0; $fila < nFILAS; $fila++) {
        for ($asiento = 0; $asiento < nCOLUMNAS; $asiento++) {
            $teatro[$fila][$asiento] = null;
        }
    }
    
    $teatro[0][3] = "Ambrosio";
    $teatro[2][5] = "Brrrrr";
    $teatro[4][10] = "Mosquito";
    $teatro[10][7] = "😼";
    $teatro[19][14] = "yokese";
    
    
    // reset() Sitúa el puntero interno al comienzo del array
    // next() Avanza el puntero interno una posición
    // prev() Mueve el puntero interno una posición hacia atrás
    // end() Sitúa el puntero interno al final del array
    // current() Devuelve el elemento de la posición actual
    // key() Devuelve la clave de la posición actual
    
    echo '<table style="border:solid black 1px">';
    
    reset($teatro);
    while (($filaActual = current($teatro)) !== false) {
        echo '<tr style="border:solid black 1px">';
        
        reset($filaActual);
        while (($asientoActual = current($filaActual)) !== false) {
            echo '<td style="border:solid black 1px; min-width:25px; height:25px;">';
            echo $asientoActual;
            echo '</td>';
            next($filaActual); // siguiente asiento
        }

        echo '</tr>';
        next($teatro); // siguiente fila
    }

    echo '</table>';
?>