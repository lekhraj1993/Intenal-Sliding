<html>
	<head>
		<title>Geca</title>
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
				</div>
			</div>
			<!-- End of line class(MENUS) -->
				
			<div class="wrapper2">
				
				<br/>
				<div class="container" style="background:#FFFFFF;border:1px rgb(4,24,44) solid;);border-radius:10px;padding:20px 10px 20px 10px ;">
					<form method="post" action="" id="login_form" name="login_form">
					<table align="center" background-color="#ccc">
						
						<tr>
							<td colspan="2"><h1 class="center reg_head">PROFILE</h1></td>
						</tr>
						
					</table>
					<table>
					<?php
					include("db.php");
					$result=mysql_query("select * from notice", $link);			
					    // output data of each row
    while($row = mysql_fetch_assoc($result)) {?>
        <tr><td><?=$row["notice"] ?></td></tr>
  <?php  }

   
 ?></table>
 
 </form>
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
