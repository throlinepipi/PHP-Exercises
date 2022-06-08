<?php

function add($int1,$int2)
{
    echo $int1 + $int2;
}

function subtract($int1,$int2)
{
    echo $int1 - $int2;
}

function multiply($int1,$int2)
{
    echo $int1 * $int2;
}

function divide($int1,$int2)
{
    echo $int1 / $int2;
}

$operator = readline("Enter your operator for 25 and 19 =  ");

if ($operator == "+")
{
    add(25,19);
}

else if ($operator == "-")
{
    subtract(25,19);
}

else if ($operator == '*')
{
    multiply(25,19);
}

else 
{
    divide(25,19);
}

?>
