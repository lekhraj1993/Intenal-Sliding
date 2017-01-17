<?php 
session_start();
if(isset($_SESSION['login_user']))
{
header('location:admin2.php');
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
			<?php
					include("admin1.php");
				?>
		<div class="main">
			<div class="wrapper1">
				<div class="header">
					
				
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
				</div>			</div>
			<!-- End of line class(MENUS) -->
				
			<div class="wrapper2">
				
				<br/>
				<div class="container" style="background:#FFFFFF;border:1px rgb(4,24,44) solid;);border-radius:10px;padding:20px 10px 20px 10px ;">
					<table align="center">
						
						
						
						<tr>
							<td colspan="2"><h1 class="center reg_head">Login for First Year Studen</h1></td>
						</tr>
						
					</table>
					
					<div id="form">
						<form method="get" action="" id="login_form" name="login_form">
							  <table border="0" style="border:none">
								<tr><td>username</td>
								  <td ><input type="text" tabindex="1"  placeholder="Register ID" name="user" class="inputtext radius1" value=""></td></tr>
								  <tr><td>username</td>
								  <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td></tr>
								  <tr>
								  <td ><input type="submit" class="fbbutton radius1" name="login" value="login" /></td>
								  <td><label><a href="" style="color:#; text-decoration:none">forgot your password?</a></label></td></tr>
								</tr>
								
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
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
<?php 
}
?>