<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

    // Incluimos librerías externas con funciones definidas por nosotros (en este caso)
    include "../core/231018libreriaValidacion.php";
    include "../core/libreriaTest.php";

    // Llamamos a una función de la librería incluida y mostramos su resultado
    echo pruebaFuncionLibreria("texto");

    // Obtenemos todas las extensiones de PHP cargadas actualmente
    $extensiones = get_loaded_extensions();


    echo "<b>Extensiones cargadas:</b><br>";

    // Recorremos el array de extensiones y las mostramos una por una
    foreach ($extensiones as $ext) {
        echo "$ext<br>";
    }
?>