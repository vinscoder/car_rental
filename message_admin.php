<!DOCTYPE html>
<html>
<head>
	<title>Car Rental</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		.txt{
			width: 600px;
			height: 200px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Toyota - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Message Admin Here</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms & policy</a></li>
						
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">you can reach us</a></li>
						<li><a href="#">Elvin investment</a></li>
						<li><a href="#">elvinishumi@gmail.com</a></li>
						<li><a href="#">+255 713617599</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Toyota</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Land cruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
				<p>Our company rents cars and other vehicles to clients at lower costs,Welcome and do business with us we know how to treat our clients.</p>
				<ul>
						<li><a href="http://facebook.com/codeprojectsdotorg/" class="facebook" target="_Elvin investments"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_Elvin investments"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_elvin investments.co.tz"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?>  Car Rental System
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>