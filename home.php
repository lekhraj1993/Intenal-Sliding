<?php 
session_start();
if(!isset($_SESSION['login_user']))
{
header('location:index.php');
}else{
?>
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
			
		<div class="main">
			<div class="wrapper1">
				<div class="header">
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
							</form><br>
	
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
				<div class="container">
					
					<div id="slider">
						<ul>				
							<li ><a href="Frist.php"><img src="img/01.jpg" /></a></li>
							<li><a href="Second.php"><img src="img/02.jpg"/></a></li>
							<li><a href="Diploma.php"><img src="img/03.jpg"/></a>></li>
						</ul>
					</div>
					
					<div class="wrapper3">
						<table border="0" align="center">
							<tr>					
								<td>	
									<div class="events">
									<h3 class="title">EVENTS</h3></br>
										<div style="height:275px;width:360px;background:#D4E7FA;font-size:14px;border-radius:5px;margin-top:-13px;">
											<ul class="quick_links_ul" style="padding-left:50px;padding-top:20px;">
													<li><a href="http://www.taranginieca.org">Tarangini</a></li>
													<li><a href="#">Combat</a></li>
													<li><a href="#">Fresher Party</a></li>
													<li><a href="#">Fare well</a></li>
													<li><a href="#">Tech Fest</a></li>
													<li><a href="#">Seminar</a></li>
													<li><a href="#">Workshop</a></li>
											</ul>
										</div>
									</div>
								</td>
								
								<td>
									<div class="f1_right quick_links">
										<h3 class="title">Quick Links</h3></br>
											<div class="links">
												<ul class="quick_links_ul">
													<li><a href="http://www.rtu.ac.in">RTU</a></li>
													<li><a href="http://www.rtuportal.com">RTU Portal</a></li>
													<li><a href="http://www.ecajmer.ac.in">GECA</a></li>
													<li><a href="http://www.google.co.in">Google India</a></li>
													<li><a href="http://www.youtube.com">You Tube</a></li>
													<li><a href="http://www.yahoo.com">Yahoo</a></li>
													<li><a href="http://www.facebook.com">Facebook</a></li>
													<li><a href="http://www.w3school.com">W3SCHOOL</a></li>
													<li><a href="http://www.tutorialspoint.com">Tutorial Point</a></li>
													<li><a href="http://www.cprogramming.com">C Progamming</a></li>
													<li><a href="http://www.cplusplus.com">Learn C++</a></li>
													<li><a href="http://www.learncpp.com">Learn C++</a></li>
													<li><a href="http://www.php.net">PHP</a></li>
													<li><a href="http://www.asp.net">ASP</a></li>
													<li><a href="http://www.java.com">Java</a></li>
													<li><a href="#">Research</a></li>
													<li><a href="#">Students</a></li>
													<li><a href="#">Teaching &amp; Learning</a></li>
													<li><a href="#">Undergraduate Courses</a></li>
													<li><a href="#">Videos</a></li>
													<li><a href="#">Visiting the University</a></li>
													<li><a href="#">What's On</a></li>
												</ul>
											</div>
									</div>
									</td>
								</tr>
							</table>
									
						</div>
								
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
<?php 
}
?>