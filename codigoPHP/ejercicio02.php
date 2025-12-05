<?php

    /*  @author Jesús Temprano Gallego
     *  @since 09/10/2025
     */

    // Variable con un texto multilínea usando heredoc
    // El texto empieza desde la primera línea y ignora la tabulación de cada linea hasta el delimitador (EOT) final
    $sTexto = <<<EOT
    Esto es una
    variable heredoc
    con salto de línea
    EOT;
    
    // Mostramos el contenido de la variable usando <pre> para que salgan los saltos de línea
    echo "<pre>".$sTexto."</pre>";
?>