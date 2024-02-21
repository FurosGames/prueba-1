<?php
    $a = $_GET['hmayor'];
    $b = $_GET['hmenor'];
    $c = 0;

    $c= $a-$b;

    if($a>$b){
        echo $a, " años, entonces hermano uno es mayor que hermano dos ya que tiene " , $b , " años y se llevan " , $c , " años de diferencia" ;
    } 
    else{
        echo $b, " años, entonces hermano dos es mayor que hermano uno ya que tiene " , $a , " años y se llevan " , $c , " años de diferencia";
    }
  
?>

