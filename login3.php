<?php
 // Starting Session
$error=''; // Variable To Store Error Message
if(isset($_SESSION['login_user']))
{
header('location:Diploma.php');
}
else
{
if (isset($_POST['login'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
$error = "Username or Password is ";
}
else
{
include("db.php");
// Define $username and $password
$user=$_POST['user'];
$pass=$_POST['pass'];


$query = mysql_query("select * from diploma where id='".$user."' AND pass='".$pass."'");
$rows = mysql_num_rows($query);
if ($rows==1) 
{

$_SESSION['login_user']=$user; // Initializing Session
header("location: dprofile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($link); // Closing Connection
}
}
}
?>