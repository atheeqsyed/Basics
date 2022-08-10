<?php

include 'db.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'A@#345_abcd1';
$dbname = 'Protofolio';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);
/*$accounts = $db->query('SELECT * FROM Projects');
echo $accounts->numRows();


$insert = $db->query('INSERT INTO Projects (project_name,project_desc) VALUES (?,?)', 'DEMO', 'SUPER CLASS');
echo $insert->affectedRows();*/

/*$account = $db->query('SELECT * FROM Projects WHERE project_name = ?', 'DEMO')->fetchArray();
echo $account['project_desc'];*/

$accounts = $db->query('SELECT * FROM Projects')->fetchAll();

foreach ($accounts as $account) {
    echo $account['project_desc'] . '<br>';
}

?>