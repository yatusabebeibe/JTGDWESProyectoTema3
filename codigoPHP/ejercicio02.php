<?php

    /*  @author Jesús Temprano Gallego
     *  @since 09/10/2025
     */

    $sTexto1 = "esto es una"
            . "variable heredoc";
    
    $sTexto2 = <<<EOT
    Esto es una
    variable heredoc
    con salto de línea
    EOT;
    
    echo $sTexto1;
    echo $sTexto2;
?>