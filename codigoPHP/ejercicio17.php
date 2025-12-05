<style>
    * { box-sizing: border-box; }
    table { border-collapse: collapse; }
    td {
        border:solid black 1px;
        min-width: 25px;
        height: 25px;
        padding: 0 5px;
    }
    .indice { text-align: center; background-color: lightgray; }
    .vacio { border: none; }
</style>
<?php

    /*  @author Jesús Temprano Gallego
     *  @since 20/10/2025
     */

    $teatro = Array();
     
    const nFILAS    = 20;
    const nCOLUMNAS = 15;

    for ($fila = 1; $fila <= nFILAS; $fila++) {
        for ($asiento = 1; $asiento <= nCOLUMNAS; $asiento++) {
            $teatro[$fila][$asiento] = null;
        }
    }

    $teatro[1][4]   = "Ambrosio";
    $teatro[3][6]   = "Brrrrr";
    $teatro[5][11]  = "Mosquito";
    $teatro[11][8]  = "😼";
    $teatro[20][15] = "yokese";

    // -----------------------------------

    echo "<h2>foreach</h2>";
    echo "<table>";

    echo "<tr>";
    echo "<td class='vacio'></td>";
    foreach ($teatro[1] as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    foreach ($teatro as $nFila => $aAsiento) {

        echo "<tr>";
        echo "<td class='indice'>F$nFila</td>";

        foreach ($aAsiento as $nAsiento => $persona) {
            echo "<td>$persona</td>";
        }

        echo "<td class='indice'>F$nFila</td>";
        echo "</tr>";
    }

    echo "<tr>";
    echo "<td class='vacio'></td>";
    foreach ($teatro[1] as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";

    // -----------------------------------
    
    echo "<h2>while</h2>";
    echo "<table>";

    $nFilas    = count($teatro);
    $nAsientos = count($teatro[1]);

    echo "<tr>";
    echo "<td class='vacio'></td>";
    $asiento = 1;
    while ($asiento <= $nAsientos) {
        echo "<td class='indice'>A$asiento</td>";
        $asiento++;
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    $fila = 1;
    while ($fila <= $nFilas) {

        echo "<tr>";
        echo "<td class='indice'>F$fila</td>";

        $asiento = 1;
        while ($asiento <= $nAsientos) {
            echo "<td>".$teatro[$fila][$asiento]."</td>";
            $asiento++;
        }

        echo "<td class='indice'>F$fila</td>";
        echo "</tr>";

        $fila++;
    }

    echo "<tr>";
    echo "<td class='vacio'></td>";
    $asiento = 1;
    while ($asiento <= $nAsientos) {
        echo "<td class='indice'>A$asiento</td>";
        $asiento++;
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";

    // -----------------------------------

    echo "<h2>for</h2>";
    echo "<table>";

    $nFilas    = count($teatro);
    $nAsientos = count($teatro[1]);

    echo "<tr>";
    echo "<td class='vacio'></td>";
    for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
        echo "<td class='indice'>A$asiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    for ($fila = 1; $fila <= $nFilas; $fila++) {

        echo "<tr>";
        echo "<td class='indice'>F$fila</td>";

        for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
            echo "<td>".$teatro[$fila][$asiento]."</td>";
        }

        echo "<td class='indice'>F$fila</td>";
        echo "</tr>";
    }

    echo "<tr>";
    echo "<td class='vacio'></td>";
    for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
        echo "<td class='indice'>A$asiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";
?>