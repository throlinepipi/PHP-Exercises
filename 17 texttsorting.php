<?php

$mark = array(40,60,20,80,88);
sort($mark); //sorted
for ($i = 0; $i < 5; $i++) {
    echo "$mark[$i]\t";
}

echo "\n";

rsort($mark);
for ($i = 0; $i < 5; $i++) {
    echo "$mark[$i]\t";
}

?>
