<?php
    $a = true;
    $b = false;

    $c = $a && $b;
    printf("%b && %b = %b", $a,$b,$c);
    echo"<br>";
    var_dump($c);
    echo"<br>";
    
    $c = $a || $b;
    printf("%b || %b = %b", $a,$b,$c);
    echo"<br>";
    var_dump($c);
    echo"<br>";

    $c = !$a;
    printf("!%b = %b = %b", $a,$b,$c);
    echo"<br>";
    var_dump($c);
    echo"<br>";
?>