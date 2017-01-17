<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
include("db.php");
// Define $username and $password
$user=$_POST['user'];
$pass=$_POST['pass'];
$colid=$_POST['$colid'];
$o_branch=$_POST['f_current_o'];
$n_branch=$_POST['f_current_n'];

$query = mysql_query("select * from first where id='".$user."' AND pass='".$pass."'");
$rows = mysql_num_rows($query);
if ($rows==1) 
{
$_SESSION['login_user']=$user; // Initializing Session
$query2 = "INSERT INTO student_info VALUES ('$id','','".$colid."','')";
								$result = mysql_query($query2) or die('Query failed: ' . mysql_error());
$sql="UPDATE `student`.`first` SET `branch` = '".$n_branch."' WHERE `first`.`id` = '".$user."' ";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());

header("location: s_profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($link); // Closing Connection
}
}
?>