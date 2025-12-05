<?php

    /*  @author Jesús Temprano Gallego
     *  @since 16/10/2025
     */

    // Mostramos la dirección IP desde la cual el cliente que accede al servidor
    echo "IP cliente: ".$_SERVER['REMOTE_ADDR']."<br>";
    
    // Mostramos la dirección IP del servidor donde se está ejecutando el codigo
    echo "IP servidor: ".$_SERVER['SERVER_ADDR']."<br>";
?>