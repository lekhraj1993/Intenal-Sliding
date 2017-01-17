
<?php 
		include('login/session.php');
	?>
	<?php

if (isset($_POST['update'])) {

include("db.php");
// Define $username and $password
//$uid=$_POST['id'];
$pass=$_POST['pass'];
$email_id=$_POST['email_id'];
$add=$_POST['add'];
$colid=$_POST['collegeid'];
$sql = "UPDATE `student`.`first` SET   `email_id` = '".$email_id."', `pass` = '".$pass."' WHERE `first`.`id` = '".$_SESSION['login_user']."'";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
$sql1 = "UPDATE `student`.`student_info` SET `add` = '".$add."' WHERE `student_info`.`id` = '".$_SESSION['login_user']."'";
$result = mysql_query($sql1) or die('Query failed: ' . mysql_error());
header("location: s_profile.php"); // Redirecting To Other Page
mysql_close($link); // Closing Connection
}




?>