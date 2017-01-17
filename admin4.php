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
<?php
//session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$acc_success='';
if (isset($_REQUEST['insert'])) 
{
if (empty($_REQUEST['notice'])) 
{
$error = "Please insert Notification";
}
else
{

							// include('db.php');
							
							$st_name=$_REQUEST['notice'];
							$query2 = "INSERT INTO notice VALUES ('$st_name')";
								$result = mysql_query($query2) or die('Query failed: ' . mysql_error());mysql_close($link);
								$acc_success=" successfully-inserted";
								}
								}
								?>