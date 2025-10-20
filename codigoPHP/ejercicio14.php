<?php

    /*  @author Jesús Temprano Gallego
     *  @since 17/10/2025
     */

    include "../core/231018libreriaValidacion.php";
    include "../core/libreriaTest.php";
    
    echo pruebaFuncionLibreria("texto");

    $extensiones = get_loaded_extensions();
    echo "<b>Extensiones cargadas:</b><br>";
    foreach ($extensiones as $ext) {
        echo "$ext<br>";
    }
?>