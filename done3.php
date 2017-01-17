<?php 
		include('login/session.php');
	?>
<?php
$error=''; // Variable To Store Error Message
if (isset($_REQUEST['confirm']))
{
if (empty($_REQUEST['chalanno']) ) 
  {
$error = "enter chlan no.";
   }
else
  {
include("db.php");
// Define $username and $password

$sql1=mysql_query("select * from student_info where id='".$_SESSION['login_user']."'", $link);
					$row = mysql_fetch_assoc($sql1);
					
					$sem=$row['sem'];


$sql="UPDATE `student`.`student_info` SET `sem` = '".($sem+1)."' WHERE `student_info`.`id` = '".$_SESSION['login_user']."' ";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
header("location: dprofile.php"); // Redirecting To Other Page

mysql_close($link); // Closing Connection
  }
}
?>