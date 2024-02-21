<?php
    $a = $_GET['Pganados'];
    $b = $_GET['Pperdidos'];
    $c = $_GET['Pempatados'];
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;

    $d = $a*3;
    $e = $c*1;
    $f = $b+$d+$c;
    $g = $a+$b+$c;
    echo "puntos " , $f , " partidos jugados " , $g;
?>