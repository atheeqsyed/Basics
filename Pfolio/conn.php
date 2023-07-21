<?php
include ("dbconn.php");
$conn = OpenCon();
echo "Con Established";
CloseCon($conn);
?>
