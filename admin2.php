

<html>
	<head>
		<title>Geca</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/fb.css"/>
		<link rel="stylesheet" type="text/css" href="css/easySlider.css"/>
		
		<script type="text/javascript" src="js/blink.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/easySlider.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){	
				$("#slider").easySlider({
					auto: true, 
					continuous: true
				});
				$("#slider2").easySlider({
					controlsBefore:	'<p id="controls2">',
					controlsAfter:	'</p>',		
					prevId: 'prevBtn2',
					nextId: 'nextBtn2'	
				});			
			});	
		</script>

	</head>
	<body>
			<?php
					include("login\session.php");
					include("admin4.php");
				?>
		<div class="main">
			<div class="wrapper1">
			<div class="header">
					<div id="header-main-right">
							<div id="header-main-right-nav">
								<form method="post" action="login/logout.php" id="login_form" name="login_form">
								  <table border="0" style="border:none">
									
									<tr>
									  
									  <td ><?= $_SESSION['login_user']?></a></td> 
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
					
					</table>
					
					<div id="form">
						<form method="post" action="" id="login_form" name="login_form">
							  <table border="0" style="border:none">
								<tr><td>Enter Notice</td>
								  <td ><input type="text" tabindex="1"  placeholder="notification" name="notice" class="inputtext radius1" value=""></td>
								  <td ><input type="submit" class="fbbutton radius1" name="insert" value="insert" /></td>
								 </tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><a href="admin5.php">show all notification</a></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><a href="admin3.php">Student Who confrm their Registration</a></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $acc_success ?></span></td>
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
							<h5>Copyright &copy; 2015<a href="index.php"> Proctor Section </a> - All Rights Reserved</h1>
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

