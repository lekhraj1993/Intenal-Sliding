
<html>
	<head>
		<title>Internal Sliding</title>
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
		include('login/session.php');
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
					<h1><a href="index.php">Proctor Section</a></h1>
					<p>Govt. Engg. College, Ajmer<a href="http://www.ecajmer.ac.in"></a></p>
					
				</div>
				
				<!-- End of header class -->
			</div>
		
			<div class="line wrapper">
				<div class="menus">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="http://www.ecajmer.ac.in"">GECA</a></li>
						<li><a href="gallery.php">Gallery</a></li>
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
					$email_id=$row['id'];
					$email_id=$row['email_id'];
					$sql1=mysql_query("select * from student_info where id='".$_SESSION['login_user']."'", $link);
					$row = mysql_fetch_assoc($sql1);
					$colid=$row['collgeid'];
					$add=$row['add'];
					$sem=$row['sem'];
					?>
					<div id="form">
						<form method="get" action="form.php">
							<table align="center">
								<?php
								$error="";
								if(isset($_REQUEST['error']))
								$error=$_REQUEST['error'];
								?>
								<tr>
									  
									  <td colspan="3" align="center"><h3><a style="text-decoration:none;" href="confirm1.php">conferm registration of semester <?=$sem+1 ?></a></h3></td> 
									  
									</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
								</tr>
								<tr id="tr2">
									<td>Student's Name</td>
									<td id="td2"><?=$name?></td>
								</tr>
								<tr id="tr2">
									<td>Father's Name</td>
									<td id="td2"><?=$fname?></td>
								</tr>
								
								<tr id="tr2">
									<td>Gender</td>
									<td id="td2"><?=$gender?></td>
								</tr>
								<tr>
									<td>Email Id</td>
									<td id="td2">
										<?=$email_id ?>
									</td>
								<tr>
									<td>Category</td>
									<td id="td2">
										<?=$category ?>
									</td>
								</tr>
								
								<tr>
									<td>Seat Type</td>
									<td id="td2"><?=$seat_type?></td>
								</tr>
								
								<tr>
									<td>College Roll No.</td>
									<td id="td2"><?= $colid?></td>
								</tr>
								<tr>
									<td>Current Branch</td>
									<td id="td2">
										<?= $current_branch ?>
									</td>
								</tr>
								<tr>
									<td>userid</td>
									<td id="td2">
										<?=$_SESSION['login_user'] ?>
									</td>
								</tr>
								<tr>
									<td>Current Semester</td>
									<td id="td2">
										<?= $sem ?>
									</td>
								</tr>
								<tr>
									<td>Address</td>
									<td id="td2">
										<?= $add ?>
									</td>
								</tr>
								<tr>
									<td colspan="2"><h3><a href="editprof1.php">Edit ur Profile</a></h3></td>
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
