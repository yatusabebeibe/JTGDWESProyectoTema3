<?php

    /*  @author Jesús Temprano Gallego
     *  @since 09/10/2025
     */

    $sSaludo = "holaaaa";
    $iPrecio = 10;
    $fDecimal = 3.14;
    $bCompletado = true;
    
    
    echo("<br>Uso de echo<br>");
    echo "La variable \"\$sSaludo\", contiene \"$sSaludo\" y  es de tipo\"" . gettype($sSaludo) . "\"<br>";
    echo "La variable \"\$iPrecio\", contiene \"$iPrecio\" y  es de tipo\"" . gettype($iPrecio) . "\"<br>";
    echo "La variable \"\$fDecimal\", contiene \"$fDecimal\" y  es de tipo\"" . gettype($fDecimal) . "\"<br>";
    echo "La variable \"\$bCompletado\", contiene \"$bCompletado\" y  es de tipo\"" . gettype($bCompletado) . "\"<br>";
    
    print "<br>Uso de print<br>";
    print  "La variable \"\$sSaludo\", contiene \"$sSaludo\" y  es de tipo\"" . gettype($sSaludo) . "\"<br>";
    echo "La variable \"\$iPrecio\", contiene \"$iPrecio\" y  es de tipo\"" . gettype($iPrecio) . "\"<br>";
    echo "La variable \"\$fDecimal\", contiene \"$fDecimal\" y  es de tipo\"" . gettype($fDecimal) . "\"<br>";
    echo "La variable \"\$bCompletado\", contiene \"$bCompletado\" y  es de tipo\"" . gettype($bCompletado) . "\"<br>";
    
    
    printf("<br>Uso de printf<br>");
    printf("La variable \"\$sSaludo\", contiene \"$sSaludo\" y  es de tipo\"" . gettype($sSaludo) . "\"<br>");
    printf("La variable \"\$iPrecio\", contiene \"$iPrecio\" y  es de tipo\"" . gettype($iPrecio) . "\"<br>");
    printf("La variable \"\$fDecimal\", contiene \"$fDecimal\" y  es de tipo\"" . gettype($fDecimal) . "\"<br>");
    printf("La variable \"\$bCompletado\", contiene \"$bCompletado\" y  es de tipo\"" . gettype($bCompletado) . "\"<br>");
    
    print_r("<br>Uso de print_r<br>");
    print_r("La variable \"\$sSaludo\", contiene \"$sSaludo\" y  es de tipo\"" . gettype($sSaludo) . "\"<br>");
    print_r("La variable \"\$iPrecio\", contiene \"$iPrecio\" y  es de tipo\"" . gettype($iPrecio) . "\"<br>");
    print_r("La variable \"\$fDecimal\", contiene \"$fDecimal\" y  es de tipo\"" . gettype($fDecimal) . "\"<br>");
    print_r("La variable \"\$bCompletado\", contiene \"$bCompletado\" y  es de tipo\"" . gettype($bCompletado) . "\"<br>");
    
?>