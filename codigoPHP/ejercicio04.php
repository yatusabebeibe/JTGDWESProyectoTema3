<?php

    /*  @author Jesús Temprano Gallego
     *  @since 10/10/2025
     */

     date_default_timezone_set('Europe/Lisbon');
     
    $tFecha = new DateTime();
    $fX = $tFecha;
     echo $fX->format('d-m-Y h:i:s') ."<br>";
     echo $fX->format('Y') ."<br>";
     echo $fX->format('F') ."<br>";
     echo $fX->format('l') ."<br>";
     echo $fX->format("d F Y") ."<br>";
     echo $fX->format('h:i') ."<br>";
     echo $fX->format('h:i:s') ."<br>";
?>