<?php

function myStrRev($string)
{
    $$stlen = strlen($string); // finding string length
    $revstring = ''; // store the reversed string

    for ($i = $stlen; $i > -1; $i--) { // iterating to reverse the string
        $revstring .= $string[$i];
    }
    return $revstring;
}
