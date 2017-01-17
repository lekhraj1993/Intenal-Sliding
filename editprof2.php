<html>
	<head>
		<title>Proctor Section</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/reg.css"/>
		<link rel="stylesheet" type="text/css" href="css/fb.css"/>
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<style>
			#td2
			{
			padding-left:40px;
			}
			#tr2
			{
			margin-top:20px;
			}
		</style>
		
		
		
	</head>
	<body>
	
	<?php 
		include('edit2.php');
	?>
		<div class="main">
			<div class="wrapper1">
				<div class="header">
					<div id="header-main-right">
							<div id="header-main-right-nav">
								<form method="post" action="login/logout.php" id="login_form" name="login_form">
								  <table border="0" style="border:none">
									
									<tr>
									  
									  <td ><a style="text-decoration:none;" href="profile.php"><?php include('login/name.php'); ?></a></td> 
									  <!--<td ><a href="registration.html"><input type="button" class="fbbutton radius1" name="signup" value="Sign up" /></a></td>-->
									</tr>
									<tr>
									  
									  <td style="padding-left:12px;"><input type="submit" class="fbbutton" name="login" value="Logout" /></td>
									  <!--<td ><a href="registration.html"><input type="button" class="fbbutton radius1" name="signup" value="Sign up" /></a></td>-->
									</tr>
									
									
								  </table>
							</form>
							</div>
						</div>
				
					<h1><a href="index.php">Internal Sliding</a></h1>
					<p>A Program of <a href="http://www.ecajmer.ac.in">GECA</a></p>
				</div>
				<!-- End of header class -->
			</div>
		
			<div class="line wrapper">
				<div class="menus">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="http://www.ecajmer.ac.in"">GECA</a></li>
						<li><a href="Notification.php">notification</a></li>
						<li><a href="http://www.ecajmer.ac.in/Contactus.aspx">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<!-- End of line class(MENUS) -->
				
			<div class="wrapper2">
				
				<br/>
				<div class="container" style="background:#FFFFFF;border:1px rgb(4,24,44) solid;);border-radius:10px;padding:20px 10px 20px 10px ;">
					<table align="center">
						
						<tr>
							<td colspan="2"><h1 class="center reg_head">PROFILE</h1></td>
						</tr>
						
					</table>
					<?php
					include("db.php");
					$sql=mysql_query("select * from first where id='".$_SESSION['login_user']."'", $link);
					$row = mysql_fetch_assoc($sql);
					
					$name=$row['s_name'];
					$fname=$row['f_name'];
					$current_branch=strtoupper($row['branch']);
					$gender=strtoupper($row['gender']);
					$category=strtoupper($row['category']);
					$seat_type=strtoupper($row['s_type']);
					$email_id=$row['email_id'];
					$pass=$row['pass'];
					$id=$row['id'];
					$sql1=mysql_query("select * from student_info where id='".$_SESSION['login_user']."'", $link);
					$row = mysql_fetch_assoc($sql1);
					$colid=$row['collgeid'];
					$add=$row['add'];
					$sem=$row['sem'];
					?>
					<div id="form">
						<form method="post" action="">
						<table>
							
									<td>Email</td>
									<td><input type="text" name="email_id" value="<?=$email_id ?>"/></td>
								</tr>
								
								<tr>
									<td>Password</td>
									<td><input type="password" name="pass" placeholder="********" value="<?=$pass ?>"></td>
								</tr>
								<tr>
								
									<td>Address</td>
									<td><input <input name="add" type="text" value="<?=$add ?>"/> </td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input class="submit" type="submit" value="update" name="update"></td>
									</tr>
								
								</table>
						</form>
					</div>
						<!-- End of first year form -->
						
					
					
				</div>
					<!-- End of container class -->
			</div>
				
			<div class="footer">
				<a style="float:right;" href=javascript:void(0); onclick=gotoTop();><img style="height:50px;width:50px;position:relative;" src="img/arrow_up.png"></a>
				<div class="footer_inside">
					<h5>Copyright &copy; 2015<a href="index.php"> Internal Slide </a> - All Rights Reserved</h1>
				</div>
			</div>
					<!-- End of footer class -->
					
		</div>
		<!-- End of main class -->
		
		<script>
			function gotoTop()
			{
			$('body,html').animate({scrollTop: 0}, 800);
			}
		</script>
		
		
	</body>
</html>
