<html>
	<head>
		<title>Proctor Section</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/reg.css"/>
		<link rel="stylesheet" type="text/css" href="css/fb.css"/>
		
		
		<script type="text/javascript" src="js/jquery.js"></script>
		
		<script>
			$(document).ready(function(){
				$( "#s_reg_form" ).hide();
				
				$( "#f_button" ).click(function() {
				   $("#form").show();
				   $( "#s_reg_form" ).hide();
				 });
				 
				 $( "#s_button" ).click(function() {
				   $("#s_reg_form").show();
				   $( "#form" ).hide();
				 });
			});
		</script>
		
	</head>
	<body>
	<?php
					include("update.php");
				?>
		<div class="main">
			<div class="wrapper1">
				<div class="header">
					<div id="header-main-right">
							
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
						<li><a href="http://ecajmer.ac.in/">GECA</a></li>
						<li><a href="#">Gallary</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<!-- End of line class(MENUS) -->
				
			<div class="wrapper2">
				
				<br/>
				<div class="container" style="background:#FFFFFF;border:1px rgb(4,24,44) solid;);border-radius:10px;padding:20px 10px 20px 10px ;">
					<table align="center">
						
						
					
					
					
						<!-- End of first year form -->
						
					<div id="s_reg_form">
						<form method="post" action="" id="login_form" name="login_form">
							  <table border="0" style="border:none">
							  <tr>
									<td><h2 class="center reg_head">BRANCH UPDATE</h2></td>
								</tr>
								<tr><td>username</td>
								  <td ><input type="text" tabindex="1"  placeholder="Register ID" name="user" class="inputtext radius1" value=""></td></tr>
								  <tr><td>password</td>
								  <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td></tr>
								<tr><td>College Roll No.</td>
								  <td ><input type="text" tabindex="3" id="pass" placeholder="enterrollno" name="colid" class="inputtext radius1" ></td></tr>
								
								<tr></tr>
								<tr>
									<td>Current Branch</td>
									<td>
										<select name="f_current_o">
											<option value="-1">--SELECT BRANCH--</option>
											<option value="ee">EE</option>
											<option value="me">ME</option>
											<option value="ce">CE</option>
											<option value="ec">EC</option>
											<option value="ei">EIC</option>
											<option value="cs">CS</option>
											<option value="it">IT</option>
										</select>
									</td>
									<tr>
									<td>New Branch</td>
									<td>
										<select name="f_current_n">
											<option value="-1">--SELECT BRANCH--</option>
											<option value="ee">EE</option>
											<option value="me">ME</option>
											<option value="ce">CE</option>
											<option value="ec">EC</option>
											<option value="ei">EIC</option>
											<option value="cs">CS</option>
											<option value="it">IT</option>
										</select>
									</td>
									<tr><td colspan="2"align="center"><input type="submit" class="fbbutton radius1" value="update" name="login" /></td>
									
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
								</tr>
								
							  </table>
							</form>
					</div>
					<!--End of second year form -->
					
				</div>
					<!-- End of container class -->
			</div>
				
			<div class="footer">
				<a style="float:right;" href=javascript:void(0); onclick=gotoTop();><img style="height:50px;width:50px;position:relative;" src="img/arrow_up.png"></a>
				<div class="footer_inside">
					<h5>Copyright &copy; 2014<a href="index.php"> Internal Slide </a> - All Rights Reserved</h1>
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
