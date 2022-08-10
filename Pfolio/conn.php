<?php
include ("dbconn.php");
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>