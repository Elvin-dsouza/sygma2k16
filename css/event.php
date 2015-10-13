<!doctype html>
<?php

	session_start();
?>
<html>
	<head>
		<link href="css/style-minimal.css" rel="stylesheet" type="text/css"/>
		<meta name=viewport content="width=device-width, initial-scale=1">

		<title>Sygma 2016-A State Level IT Fest</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:600,300,400700,600,800,900italic' rel='stylesheet' type='text/css'>
		<meta name="description" content="Sygma Is a State Level IT Fest Organised By Shri Dharmasthala Manjunatheshwara College of Business Management Mangalore
						To Provide a Platform for budding IT Professionals and Technology Enthusiasts to gain Real world experience and showcase thier Various Talents
						Sygma Provides a whole host of events ranging from Technical to Communicational Events.">
		<meta name="keywords" content="SDM,Fest,sygma,sygma 2016, SDM mangalore, mangalore IT fest">
		<meta name="theme-color" content="#607D8B">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="favicon.ico">
	</head>
	<body>
		<?php require "inline-svg.php";?>
		<div class="page-flow" style="display:none" >

			<div class="modal">
				<svg class="icon_close_modal" onclick="close_modal();"><use xlink:href="#icon-cancel"></use></svg>
				<form action="register.php" method="post" style="border-right:1px solid darkgrey;">
					<h2 style="color:#333; font-family:'roboto';">Registration Form</h2>
					<p style="color:#333; font-family:'roboto';">Dont have an account?,Register now</p>
						<input type="text" name="name" placeholder="full name" class="text-bx" required>
						<input type="email" name="email" placeholder="someone@something.com" class="text-bx" required>
						<input type="password" name="password" placeholder="password" class="text-bx" required>
						<input type="password" name="cpassword" placeholder="confirm password" class="text-bx" required>
						<input type="submit" value="Send" class="register">
					</form>

				<form action="login.php" method="post">
					<h2 style="color:#333; font-family:'roboto';">Login/Registration Form</h2>
						<input type="email" name="email" placeholder="someone@something.com" class="text-bx" required>
						<input type="password" name="password" placeholder="password" class="text-bx" required>
						<input type="submit" value="Login" class="register"><br><br>


				</form>
			</div>
		</div>


		<div class="page-cover" style="display:none"></div>


		<header>

			
			<article id="heading-area">
				<figure><img src="images/logo.png" alt="SDMCBM" /></figure>
				<h1>Event Name</h1>
				<p>event Description</p>
			</article>
		</header>
		<section id="content" >


			
		


		</section>
		<footer>
			<section>
			<article>

				<h3>SYGMA 2016</h3>
				<p>SDM College of Business Management Mangalore</p>
				<p>Email: sygma@sdm.ac.in</p>
				<p>Ph:2398342324</p>
				<div class="material-button raised" style="width:70px"><div class="material-layer light"></div>Visit Website</div>
			</article>
			<aside>
			<h3>FOLLOW SYGMA</h3>
			<nav>
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Youtube</a>
				<a href="#">Google Plus</a>

		</aside>
				<aside>
				<h3>LINKS</h3>
				<nav>
					<a href="#">Online Registeration</a>
					<a href="#">Videos</a>
					<a href="#">About</a>
					<a href="#">Contact</a>
					<a  onclick="open_modal();" href="#">Admin Login</a>
					<a href="#">Administration Tools</a>
					<a href="#">Back to Top</a>
			</aside></section>



		</footer>
			<script src='js/script.js'></script>

	</body>
</html>
