<?php
 // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_REQUEST['login'])) {
if (empty($_REQUEST['user']) || empty($_REQUEST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
include("db.php");
// Define $username and $password
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];


$query = mysql_query("select * from first where id='".$user."' AND pass='".$pass."'");
$rows = mysql_num_rows($query);
if ($rows==1) 
{
$_SESSION['login_user']=$user; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($link); // Closing Connection
}
}
?>