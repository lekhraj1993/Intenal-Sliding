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
					include("freg.php");
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
						<li><a href="http://www.ecajmer.ac.in"">GECA</a></li>
						<li><a href="Notification.php">notification</a></li>
						<li><a href="http://www.ecajmer.ac.in/Contactus.aspx">Contact Us</a></li>
					</ul>
				</div>>
			</div>
			<!-- End of line class(MENUS) -->
				
			<div class="wrapper2">
				
				<br/>
				<div class="container" style="background:#FFFFFF;border:1px rgb(4,24,44) solid;);border-radius:10px;padding:20px 10px 20px 10px ;">
					<table align="center">
						
						<tr>
							<td colspan="2"><h1 class="center reg_head">REGISTRATION FORM</h1></td>
						</tr>
						
					</table>
					
					<div id="form">
						<form method="get" action="">
							<table align="center">
								<tr>
									<td colspan="2"><h3 class="center reg_head">FIRST YEAR REGISTRATION</h3></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $acc_success ?></span></td>
								</tr>
								<tr>
									<td style="color:red;font-size:15px;"colspan="2"><span><?php echo $error; ?></span></td>
								</tr>
								<tr>
									<!--<input type="hidden" name="year" value="f_year">-->
									<td>Student's Name</td>
									<td><input type="text" name="s_name" placeholder="Student Name"/></td>
								</tr>
								<tr>
									<td>Father's Name</td>
									<td><input type="text" name="f_name" placeholder="Father Name"></td>
									
								</tr>
								
								<tr>
									<td> Branch</td>
									<td>
										<select name="branch">
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
								</tr>
								
								<tr>
									<td>Gender</td>
									<td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td>
								</tr>
								
								<tr>
									<td>Category</td>
									<td>
										<select name="category">
											<option value="">--SELECT CATEGORY--</option>
											<option value="general">General</option>
											<option value="obc">OBC</option>
											<option value="sbc">SBC</option>
											<option value="sc">SC</option>
											<option value="st">ST</option>
										</select>
									</td>
								</tr>
								
								<tr>
									<td>Seat Type</td>
									<td><input type="radio" name="s_type" value="gas">GAS<input type="radio" name="s_type" value="sfs">SFS<input type="radio" name="s_type" value="tfws">TFWS</td>
								</tr>
								
								<tr  id="rpet_id">
									<td>RPET Roll No.</td><td><input type='text'  name='id' placeholder='RPET Roll No.'/></td>
								</tr>
							<tr>
									<td>Email</td>
									<td><input type="text" name="email_id" placeholder="Enter Email address"/></td>
								</tr>
								
								<tr>
									<td>Password</td>
									<td><input type="password" name="pass" placeholder="********"></td>
								</tr>
								<tr>
									<td>Terms & Conditions</td>
									<td><input type="checkbox" name="agreed" value="agree">Agree</input></td>
								</tr><tr>
									<td align="right"><input class="submit" type="submit" value="Sign up" name="signup"></td>
									<td align="left"><input class="submit" type="reset" value="Reset" name="reset"/></td>
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
