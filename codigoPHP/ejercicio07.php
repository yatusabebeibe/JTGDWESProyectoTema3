<?php

    /*  @author Jesús Temprano Gallego
     *  @since 16/10/2025
     */

    // Mostramos el nombre del archivo actual sin la ruta
    echo basename(__FILE__) ."<br>";

    // Mostramos el nombre del archivo actual con la ruta del servidor
    echo __FILE__ ."<br>";

    // Mostramos la ruta del script actual relativa al root del servidor
    echo $_SERVER['PHP_SELF']."<br>";

    // Mostramos el nombre del script tal como fue llamado por el navegador
    echo $_SERVER['SCRIPT_NAME']."<br>";
?>