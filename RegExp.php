<?php
$String = "Hi Welocme to Athiba's World!";
$exp = preg_match("/World/i", $String);
if ($exp) {
    echo "Match found!";
} else {
    echo "Match not found!";
}
