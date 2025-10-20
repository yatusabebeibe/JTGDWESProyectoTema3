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
    
    echo "<h2>foreach</h2>";
    echo '<table style="border:solid black 1px">';
    foreach ($teatro as $nFila => $aAsiento) {
        echo '<tr style="border:solid black 1px">';
        foreach ($aAsiento as $nAsiento => $persona) {
            echo '<td style="border:solid black 1px; min-width: 25px; height: 25px;">';
            echo "$persona";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    
    // -----------------------------------
    
    echo "<h2>while</h2>";
    echo '<table style="border:solid black 1px">';
    
    $nFilas = count($teatro);
    $fila = 0;
    
    while ($fila < $nFilas) {
        echo '<tr style="border:solid black 1px">';

        $nAsientos = count($teatro[$fila]);
        $asiento = 0;

        while ($asiento < $nAsientos) {
            echo '<td style="border:solid black 1px; min-width: 25px; height: 25px;">';
            echo $teatro[$fila][$asiento];
            echo '</td>';
            $asiento++;
        }
        echo '</tr>';
        $fila++;
    }
    echo '</table>';
    
    // -----------------------------------
    
    echo "<h2>for</h2>";
    echo '<table style="border:solid black 1px">';
    for ($fila = 0; $fila < count($teatro); $fila++) {
        echo '<tr style="border:solid black 1px">';

        for ($asiento = 0; $asiento < count($teatro[$fila]); $asiento++) {
            echo '<td style="border:solid black 1px; min-width: 25px; height: 25px;">';
            echo $teatro[$fila][$asiento];
            echo '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';
?>