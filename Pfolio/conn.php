<?php
include ("dbconn.php");
$conn = OpenCon();
echo "Connection Established";
CloseCon($conn);
?>
