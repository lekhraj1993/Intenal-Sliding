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
if (isset($_REQUEST['remove'])) 
{
if (empty($_REQUEST['notice'])) 
{
$error = "Please insert Notification";
}
else
{

$query = mysql_query("select * from notice where notice='".$_REQUEST['notice']."'");
$rows = mysql_num_rows($query);
if ($rows==1) 
{
$query2 = "DELETE FROM notice WHERE notice='".$_REQUEST['notice']."'";
								$result = mysql_query($query2) or die('Query failed: ' . mysql_error());mysql_close($link);
								$acc_success=" successfully-removed";
} else {
$error = "Username or Password is invalid";
}
mysql_close($link); // Closing Connection;
							
							//$st_name=$_REQUEST['notice'];
							
								}
								}
								?>