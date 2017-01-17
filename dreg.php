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
if (isset($_REQUEST['signup'])) 
{
if (empty($_REQUEST['s_name']) || empty($_REQUEST['f_name']) || empty($_REQUEST['branch']) || empty($_REQUEST['email_id']) || empty($_REQUEST['gender']) || empty($_REQUEST['category']) || empty($_REQUEST['s_type']) || empty($_REQUEST['id']) || empty($_REQUEST['pass']) || empty($_REQUEST['agreed'])) 
{
$error = "Please fill all entries";
}
else
{

							// include('db.php');
							
							$st_name=$_REQUEST['s_name'];
							$fa_name=$_REQUEST['f_name'];
							$branch=$_REQUEST['branch'];
							$email_id=$_REQUEST['email_id'];
							$gender=$_REQUEST['gender'];
							$category=$_REQUEST['category'];
							$s_type=$_REQUEST['s_type'];
							$id=$_REQUEST['id'];
							$password=$_REQUEST['pass'];
							
							$sql=mysql_query("SELECT * FROM diploma WHERE id='".$id."'");
							if(mysql_num_rows($sql)!=0)
								{
								mysql_close($link);
								$acc_success="Account already exist";
								}
							else
								{
								// Performing SQL query
								$query = "INSERT INTO diploma VALUES ('$st_name','$fa_name','$branch','$gender','$category','$s_type','$id','$email_id','$password')";
								
								//$query = "INSERT INTO sign_up  VALUES ('$first_name','$last_name','$year','$current_branch','$email_id','$gender','$seat_type','$collage_id','$password')";
								$result = mysql_query($query) or die('Query failed: ' . mysql_error());
								$query2 = "INSERT INTO student_info VALUES ('$id','$st_name','','not given','3')";
								$result = mysql_query($query2) or die('Query failed: ' . mysql_error());
								
								// Closing connection
								mysql_close($link);
								$acc_success="Account created successfully---Now login First";
								}
							}
}
?>