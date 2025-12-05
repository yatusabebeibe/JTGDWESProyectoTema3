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

    /* @author Jesús Temprano Gallego
    *  @since 20/10/2025
    */

    // Creamos un array vacío para representar el teatro
    $teatro = Array();

    // Definimos constantes con el número de filas y columnas
    const nFILAS    = 20;
    const nCOLUMNAS = 15;

    // Inicializamos todos los asientos del teatro a null
    for ($fila = 1; $fila <= nFILAS; $fila++) {
        for ($asiento = 1; $asiento <= nCOLUMNAS; $asiento++) {
            $teatro[$fila][$asiento] = null;
        }
    }

    // Asignamos algunos asientos como ocupados
    $teatro[1][4]   = "Ambrosio";
    $teatro[3][6]   = "Brrrrr";
    $teatro[5][11]  = "Mosquito";
    $teatro[11][8]  = "😼";
    $teatro[20][15] = "yokese";

    // -----------------------------------

    // Mostramos el teatro usando foreach
    echo "<h2>foreach</h2>";
    echo "<table>";

    // Primera fila de índices de asientos (encabezado superior)
    echo "<tr>";
    echo "<td class='vacio'></td>";
    foreach ($teatro[1] as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    // Recorremos todas las filas y asientos mostrando los nombres
    foreach ($teatro as $nFila => $aAsiento) {

        echo "<tr>";
        echo "<td class='indice'>F$nFila</td>"; // índice de fila a la izquierda

        foreach ($aAsiento as $nAsiento => $persona) {
            echo "<td>$persona</td>";
        }

        echo "<td class='indice'>F$nFila</td>"; // índice de fila a la derecha
        echo "</tr>";
    }

    // Última fila de índices de asientos (pie)
    echo "<tr>";
    echo "<td class='vacio'></td>";
    foreach ($teatro[1] as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";

    // -----------------------------------

    // Mostramos el teatro usando while
    echo "<h2>while</h2>";
    echo "<table>";

    $nFilas    = count($teatro);
    $nAsientos = count($teatro[1]);

    // Encabezado superior
    echo "<tr>";
    echo "<td class='vacio'></td>";
    $asiento = 1;
    while ($asiento <= $nAsientos) {
        echo "<td class='indice'>A$asiento</td>";
        $asiento++;
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    // Recorremos filas y asientos con while
    $fila = 1;
    while ($fila <= $nFilas) {

        echo "<tr>";
        echo "<td class='indice'>F$fila</td>"; // índice de fila a la izquierda

        $asiento = 1;
        while ($asiento <= $nAsientos) {
            echo "<td>".$teatro[$fila][$asiento]."</td>";
            $asiento++;
        }

        echo "<td class='indice'>F$fila</td>"; // índice de fila a la derecha
        echo "</tr>";

        $fila++;
    }

    // Pie de tabla
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

    // Mostramos el teatro usando for
    echo "<h2>for</h2>";
    echo "<table>";

    $nFilas    = count($teatro);
    $nAsientos = count($teatro[1]);

    // Encabezado superior
    echo "<tr>";
    echo "<td class='vacio'></td>";
    for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
        echo "<td class='indice'>A$asiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    // Recorremos todas las filas y asientos con for
    for ($fila = 1; $fila <= $nFilas; $fila++) {

        echo "<tr>";
        echo "<td class='indice'>F$fila</td>"; // índice de fila a la izquierda

        for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
            echo "<td>".$teatro[$fila][$asiento]."</td>";
        }

        echo "<td class='indice'>F$fila</td>"; // índice de fila a la derecha
        echo "</tr>";
    }

    // Pie de tabla
    echo "<tr>";
    echo "<td class='vacio'></td>";
    for ($asiento = 1; $asiento <= $nAsientos; $asiento++) {
        echo "<td class='indice'>A$asiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";
?>