<?php
class dbconn {
public function OpenCon()
{
    global $conn;
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "A@#345_abcd1";
    $db = "Protofolio";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die
    ("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function CloseCon($conn)
{
 $conn -> close();
}
}
?>
