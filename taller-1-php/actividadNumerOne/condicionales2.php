<?php

    $a = $_GET['nombre'];
    $b = $_GET['asignatura'];
    $c = $_GET['nota'];
    $d = $_GET['nota2'];
    $e = $_GET['nota3'];
    $f = 0;
    $g = 0;
 

    $f = $c+$d+$e;
    $g = $f/3;
    echo $a , $b , "promedio " , $g; 

?>
