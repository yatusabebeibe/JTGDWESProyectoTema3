<?php

    /*  @author Jesús Temprano Gallego
     *  @since 10/10/2025
     */

    date_default_timezone_set('Europe/Madrid');
    $timestamp = time();
    
    echo $timestamp . "<br>";
    echo date("d-m-Y H:i:s", $timestamp);
?>