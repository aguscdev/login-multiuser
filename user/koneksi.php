<?php
// nama host
$dbhost = 'localhost';
// nama user
$dbuser = 'root';
// password user
$dbpass = '';
// nama database
$dbname = 'tugasphp';

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
?>