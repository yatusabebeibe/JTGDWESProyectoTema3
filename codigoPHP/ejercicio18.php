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
    
    
    // reset() Sitúa el puntero interno al comienzo del array
    // next() Avanza el puntero interno una posición
    // prev() Mueve el puntero interno una posición hacia atrás
    // end() Sitúa el puntero interno al final del array
    // current() Devuelve el elemento de la posición actual
    // key() Devuelve la clave de la posición actual


    // Mostramos el teatro usando punteros internos de arrays con reset(), current() y next()
    echo "<table>";

    // Encabezado superior con los índices de los asientos
    echo "<tr>";
    echo "<td class='vacio'></td>";
    reset($teatro); // colocamos el puntero al inicio del array de filas
    $filaPrimera = current($teatro); // obtenemos la primera fila para los encabezados
    foreach ($filaPrimera as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>"; // mostramos índice de asiento
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    // Recorremos cada fila del teatro
    reset($teatro); // puntero al inicio de filas
    while (($aAsiento = current($teatro)) !== false) {
        $nFila = key($teatro); // número de fila actual

        echo "<tr>";
        echo "<td class='indice'>F$nFila</td>"; // índice de fila a la izquierda

        // Recorremos cada asiento de la fila
        reset($aAsiento); // puntero al inicio de los asientos de la fila
        while (($persona = current($aAsiento)) !== false) {
            $nAsiento = key($aAsiento); // número de asiento
            echo "<td>$persona</td>"; // mostramos contenido del asiento
            next($aAsiento); // avanzamos al siguiente asiento
        }

        echo "<td class='indice'>F$nFila</td>"; // índice de fila a la derecha
        echo "</tr>";

        next($teatro); // avanzamos a la siguiente fila
    }

    // Pie de tabla con los índices de los asientos
    echo "<tr>";
    echo "<td class='vacio'></td>";
    reset($teatro);
    $filaPrimera = current($teatro); // primera fila para repetir los índices
    foreach ($filaPrimera as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";
?>