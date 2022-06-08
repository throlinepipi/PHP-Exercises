<?php

function swap(&$a,&$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Before calling function\n";
    echo "a = ". $a. "\n";
    echo "b = ". $b. "\n";
    
}
$n1 = 20;
$n2 = 30;

swap ($n1,$n2);
echo "After calling function\n";
echo "n1 = ". $n1. "\n";
echo "n2 = ".$n2;
?>