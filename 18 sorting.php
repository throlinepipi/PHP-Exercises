<?php

$watchbrands = array ("2" => "Burberry", "4" => "Dior", "3" => "Casio", "5" => "Emporio Armani", "1" => "Armani Exchange");

echo "a sort\n";
asort ($watchbrands);
foreach ($watchbrands as $key => $value){   
    echo "$key = $value\n";
}

echo "\n";

echo "ar sort\n";
arsort ($watchbrands);
foreach ($watchbrands as $key => $value){   
    echo "$key = $value\n";
}

echo "\n";

echo "k sort\n";
ksort ($watchbrands);
foreach ($watchbrands as $value => $key){   
    echo "$key = $value\n";
}

echo "\n";

echo "kr sort\n";
krsort ($watchbrands);
foreach ($watchbrands as $value => $key){   
    echo "$key = $value\n";
}

?>