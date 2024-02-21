<?php
    $a = $_GET['volantes'];
    $b = $_GET['post'];
    $c = $_GET['tdepres'];
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;

    $d = $a*2000;
    $e = $b*5000;
    $f = $c*500;
    $g = $d+$e+$f;
    echo "costo volantes " , $d , " costo post " , $e , " costo tdepres " , $f , " pago total " , $g;
?>