<!doctype html>
<?php

	session_start();
?>
<html>
	<head>
		<link href="css/event-page.css" rel="stylesheet" type="text/css"/>
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
		


		

		<header>

			
			<article id="heading-area">
				<figure><img src="images/logo.png" alt="SDMCBM" /></figure>
				<h1>Event Name</h1>
				
			</article>
		</header>
		<section id="content" >
			<nav class="main-nav">
				<a href="index.php"><div class="material-button flat" style="padding:0px; "><div class="material-layer dark"></div><svg class="icon-back"><use xlink:href="#icon-arrow_back"></use></svg></div></a>
				
			</nav>
			<article>
				<h3>EVENT TITLE </h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem excepturi ea error, quaerat odit rerum pariatur id animi. Quae dolor labore, iste! Eos nisi sequi recusandae perferendis nihil quasi rem!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, vero obcaecati. Repellendus aliquam ad beatae assumenda fugit voluptatum amet non quae. Eaque repellendus harum sint mollitia, tempora libero dolore hic.
				</p>
			</article>
			<article>
				<h3>EVENT RULES</h3>
			
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam, ipsa laboriosam veniam optio velit neque corrupti</li>
				</ul>
			</article>
		
	
		
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
			<script>
				var animStart = 0;
		 $(".material-button").click(function(e){

		 		if(animStart == 0)
		 		{
		 			animStart=1;
		 			 var parentOffset = $(this).offset();
		               var $layer = $(this).find(".material-layer");
		               //or $(this).offset(); if you really just want the current element's offset
		               var relX = e.pageX - parentOffset.left;
		               var relY = e.pageY - parentOffset.top;

		               $layer.css({
		                 "left":relX,
		                 "top":relY,
		               });
		            $layer.addClass("animate");
		              setTimeout(function(){
		                  $layer.removeClass("animate");
		                  animStart=0;
		              },500);
		 		}
              

          });
			</script>

	</body>
</html>
