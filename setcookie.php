<?php
setcookie("user_name", "Guru99", time() + 60, '/'); // expires after 60 seconds
echo 'the cookie has been set for 60 seconds';

//print_r($_COOKIE);    //output the contents of the cookie array variable 
