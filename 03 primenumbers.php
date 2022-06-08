<?php

echo "The prime numbers between 1 to 20 are ";

for ($i = 1; $i <= 20; $i++)
{
    $k = 0;

    for ($j = 1; $j <= $i; $j++)
    {
        if ($i % $j == 0)
        {
            $k++;
        }
    }

    if ($k == 2)
    {
        echo $i." ";
    }
}

?>