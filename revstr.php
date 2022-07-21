<?php
$name = 'ATHEEQ';
echo "Result from php funtion =>" . strrev($name) . "<BR>";
$j = 0;
for ($i = 0; $i <= 5; $i++) {
    if ($name[$i] == '') {
        break;
    }
    echo "$name[$i]";
    $j++;
}
echo "<br>";
echo "$j";
$reverse = '';
for ($z = $j; $z >= 0; $z--) {
    $reverse = $reverse . "$name[$z]";
}
echo $reverse;
