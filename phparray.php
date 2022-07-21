
<?php

$intArray = array(10, 20, 30);

echo "First Element: $intArray[0]\n";
echo "<br>";
echo "Second Element: $intArray[1]\n";
echo "<br>";
echo "Third Element: $intArray[2]\n\n";
echo "<br>";

//returns data type and value
var_dump($intArray);


//Reverse a string without using strrev lib function
$name = 'ATHEEQ';
//echo "result from php funtion =>" . strrev($name) . "<BR>";
//$j = 0;
//for ($i = 0; $i <= 10; $i++) {
//  if ($name[$i] == '') {
//    break;
//}
// echo "$name[$i]";
//$j++;
//}
//echo "$j";
//$reverse = '';
//for ($z = $j; $z >= 0; $z--) {
//  $reverse = $reverse . "$name[$z]";
//}
//echo $reverse;
$reverse = '';
for ($i = 0; $i < 5; $i++) {
    $reverse = $name[$i] . $reverse;
}
echo $reverse;



?>
