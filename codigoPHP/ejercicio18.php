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
    
    echo "<table>";

    echo "<tr>";
    echo "<td class='vacio'></td>";
    reset($teatro);
    $filaPrimera = current($teatro);
    foreach ($filaPrimera as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    reset($teatro);
    while (($aAsiento = current($teatro)) !== false) {
        $nFila = key($teatro);

        echo "<tr>";
        echo "<td class='indice'>F$nFila</td>";

        reset($aAsiento);
        while (($persona = current($aAsiento)) !== false) {
            $nAsiento = key($aAsiento);
            echo "<td>$persona</td>";
            next($aAsiento);
        }

        echo "<td class='indice'>F$nFila</td>";
        echo "</tr>";

        next($teatro);
    }

    echo "<tr>";
    echo "<td class='vacio'></td>";
    reset($teatro);
    $filaPrimera = current($teatro);
    foreach ($filaPrimera as $nAsiento => $persona) {
        echo "<td class='indice'>A$nAsiento</td>";
    }
    echo "<td class='vacio'></td>";
    echo "</tr>";

    echo "</table>";

?>