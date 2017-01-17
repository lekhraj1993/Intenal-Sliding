<?php

$host="localhost";
$user="root";
$pass="";
$db="student";


// Connecting, selecting database
$link = mysql_connect($host,$user,$pass) or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db($db) or die('Could not select database');


?>