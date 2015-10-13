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

			<span class="material-layer" style="display:none">
			</span>
			<article id="heading-area">
				<figure><img src="images/logo.png" alt="SDMCBM" /></figure>
				<h1>Sygma 2016</h1>
				<p>A State Level IT Fest</p>
				<nav id="nav-icons"><svg class="icon-arrow" onclick="scrollhere();"><use xlink:href="#icon-arrow_drop_down"></use></svg></nav>
			</article>
			<nav id="social-bar">
				<svg class="icon-social" id="icon-fb"><use xlink:href="#icon-facebook3"></use></svg>
				<svg class="icon-social" id="icon-yt"><use xlink:href="#icon-youtube3"></use></svg>
				<svg class="icon-social" id="icon-tw"><use xlink:href="#icon-tumblr"></use></svg>
			</nav>
		</header><!--[End of Header] -->
		<!--[Start of Main Content Wrapper] -->
		<section class="main-nav">
			<nav>
				<a  onclick="scrollnav('#sector');">ABOUT</a>
				<a  onclick="scrollnav('.video-sector');">VIDEO</a>
				<a  onclick="scrollnav('.sector-event');">EVENT</a>
				<a  onclick="scrollnav('.contacts');">CONTACTS</a>
				<a  onclick="scrollnav('.event-head-sector');">TEAM</a>
			</nav>
			
		</section>
		<section id="content" >


			<section id="sector" class="column">
				<article id="article-desc">
					<h3>Welcome To Sygma</h3>
					<p class="desc">
						Sygma is a state level IT fest organised by Shri Dharmasthala Manjunatheshwara college of business management Mangalore
						to provide a platform for budding IT professionals and technology enthusiasts to gain real world experience and showcase thier various talents
						Sygma Provides a whole host of events ranging from technical to communicational events.
					</p>
					<span><figure><img id="profile"src="images/pp.jpg" alt="SDMCBM" /></figure><p>Shivaprasad V Bhat,<br/>SYGMA CEO 2k16</p></span>
				</article>
				</article>
			</section>

			<!--<section id="theme-showcase">
					<figure><img id="theme-pic"src="http://lorempixel.com/400/350/" alt="SDMCBM" /></figure>
					<article id="theme">
						<h3>Digital Revolution</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
			</section>-->



			<section id="sector2">
				<article id="article-grid">
					<div id="grid-row">
						<div id="grid-item" class="item-info">
							<div class="material-overlay">
							</div>
							<!--img src="images/ed.jpg" alt="SDMCBM" />-->
							<svg class="icon"><use xlink:href="#icon-location_city"></use></svg>
							<article>
									<h3>VENUE</h3>
									<p>Shri Dharmasthala Manjunatheshwara College Mangalore</p>
							</article>
						</div>
						<div id="grid-item" class="item-info">
							<svg class="icon" ><use xlink:href="#icon-schedule"></use></svg>
							<!--<img src="images/clk.jpg" alt="SDMCBM" />-->
							<article>
									<h3>DATE/TIME</h3>
									<p><time>January 23rd 2016, 8:00 AM</time>
										<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=SYGMA%20016&dates=20160123T010000Z/20160123T020000Z&details=State%20Level%20IT%20Fest%20Organised%20By%20SDM%20College%20Mangalore">.</a>
									</p>
							</article>
						</div>
						<div id="grid-item" class="item-info">
							<svg class="icon" ><use xlink:href="#icon-local_library"></use></svg>
							<!--<img src="images/rg.png" alt="SDMCBM" />-->
							<article>
									<h3>RULES</h3>
									<p>Click to Learn more</p>
							</article>
						</div>
					</div>
				</article>
			</section>

				<section class="video-sector">
					<article>
					<h3 style="font-weight:300">Get a Taste of What makes sygma Amazing..</h3>


				</article>
				<section>
				<figure class="offset-b">
					<img src="http://lorempixel.com/400/200/" alt="SDMCBM" />
					<figcaption class="shown-play-icon"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>welcome to Sygma</p></figcaption>
				</figure>
				<figure class="middle">
					<img src="http://lorempixel.com/400/400/" alt="SDMCBM" />
					<figcaption class="shown-play-icon"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>promo</p></figcaption>
				</figure>
				<figure class="offset-a">
					<img src="http://lorempixel.com/400/200/" alt="SDMCBM" />
					<figcaption class="shown-play-icon"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>First Look</p></figcaption>
				</figure>
			</section>

			<article>

					<p>Follow us on youtube to get to know sygma and its amazing team.

					</p>

				</article>
		</section>
		<section class="sector-event">

				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>Coding and Debugging</h3><p>For Code Geeks and Debuggers</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>Best Manager</h3><p>People with great personalities rise high, can you rise higher</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>Web Designing</h3><p>Creativity Inginuity and Flexibilty, Can you master them all?</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>Treasure Hunt</h3><p>Think on your feet, Each decision may affect your outcome</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>IT Quiz</h3><p>Event Description</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>IT Debate</h3><p>Event Description</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>E-News</h3><p>Event Description</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				<article class="card-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /><h3>Klyent Konnect</h3><p>Event Description</p><div class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>

		</section>




			<section class="contact-info" >

				<section class="map-box">
					<div class="map-disable" onclick="$(this).hide();"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.439402703426!2d74.84134549999996!3d12.879442949999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a44fb709daf%3A0xc4d2eaffb58ea704!2sSDM+College!5e0!3m2!1sen!2sin!4v1436857039173" width="600" height="450" frameborder="0" style="border:0;width:100%;min-height:300px" allowfullscreen></iframe>

				</section>

				<div class="map-overlay">
					<section class="contacts">
						<article class="contact">
							<figure><img src="images/pp.jpg" alt="CEO"/></figure>
							<span><h4>Shivaprasad V Bhat</h4>
							<p>CEO OF Sygma</p>
							</span>
						</article>
						<article class="contact">
							<figure><img src="images/r.jpg" alt="staff coordinator"/></figure>
							<span><h4>Reshmi B.R </h4>
							<p>Lecturer incharge</p>
							</span>
						</article>
						<article class="contact">
							<figure><img src="images/dp.jpg" alt="staff coordinator"/></figure>
							<span><h4>Deepa Hegde</h4>
							<p>Lecturer incharge</p>
							</span>
						</article>
					</section>
					<section class="event-head-sector">
						<article>

								<p>Dedicated to the Team that makes things possible. <br/>And the Participants who make it worthwhile.
								</p>
							</article>
							<section>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hphotos-xaf1/v/t1.0-9/11745627_1450250495300373_8743351366501760412_n.jpg?oh=9dca099ce5efb802b8a4e5e465166feb&oe=569362A9" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hphotos-xaf1/v/t1.0-9/11102734_813194178771600_356870935566296144_n.jpg?oh=406e96fc8d161f348ab10a67ae475bfd&oe=569A4B8B" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hprofile-xta1/v/t1.0-1/p160x160/12003219_572766289528346_3478638705072004020_n.jpg?oh=df2bc7e74bfa3fb6dccbd71317b2d938&oe=56A55FE3" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hprofile-xtf1/v/t1.0-1/p160x160/11193217_879314848806424_7226755982859354639_n.jpg?oh=ae26d82cc300ddae793b24dd69cd54e7&oe=569FDA5E" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hprofile-xlp1/v/t1.0-1/p160x160/12063536_845433788858369_6356066837490405677_n.jpg?oh=f8a1542f89acd5a344d5f54a13c70d1d&oe=56A164F3" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://scontent.fmaa1-1.fna.fbcdn.net/hprofile-xfp1/v/t1.0-1/p160x160/10978481_1034909776521351_5130948455653869298_n.jpg?oh=73b05c30c4ca489c43c2b2647cbb67f5&oe=565E7B69" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="https://lh6.googleusercontent.com/-4O-6uaKGqzU/VhEd3CqXqcI/AAAAAAAABDs/heBPI3lot84/s529-no/1129c4cf-4801-4de0-a119-38887c9b5403" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
							<figure class="team-art">	<img src="http://lorempixel.com/400/200/" alt="SDMCBM" /></figure>
						</section>
					</section>
				</div>
			</section>


		</section>
		<!--[End of Main Content Wrapper] -->
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
<!--<section class="sector-info" class="column">
				<article>
					<h3 style="font-weight:300">Innovation at its best..</h3>
					<p>At Sygma we Strive to innovate and encourage creativity and discovery at every level,We believe innovation is the most important personal goals
					</p>
				</article>
				<center><button class="frame">Register Online</button></center>
			</section>

			-->
			<!---->
			<!-- Header Section Start -->
		<!--<div class="side-bar">
			<div class="cover-photo">
			</div>
			<nav>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-home"></use></svg><p>Home</p></a>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-search"></use></svg><p>Search</p></a>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-user"></use></svg><p>Profile</p></a>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-info"></use></svg><p>About</p></a>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-cogs"></use></svg><p>Settings</p></a>
				<a href="#"><svg class="icon-nav"><use xlink:href="#icon-enter"></use></svg><p>Logout</p></a>
			</nav>
		</div>-->
		<!--<div id="ham-icon">
				<svg class="icon-ham" onclick="toggleBar();"><use xlink:href="#icon-menu"></use></svg>
			</div>-->
			<!--<section id="event-sector">
						<section id="scontainer">
								<div class="slider">
									<div class="loading">
										<svg class="loader"><use xlink:href="#icon-spinner10"></use></svg>
										<p>Loading...</p>
									</div>
									<div class="pslide">
										<span><div><article> <img class="event-img" src="images/logo.jpg" alt="SDMCBM" /> <p>Placeholder</p></article> </div><img onload="check_count()" src="images/picjumbo.jpg" onload="check_count()" /></span>
										<span><div><article> <img class="event-img" src="images/logo.jpg" alt="SDMCBM" /> <p>Placeholder</p></article> </div><img onload="check_count()" src="images/picjumbo.jpg" onload="check_count()" /></span>
										<span><div><article> <img class="event-img" src="images/logo.jpg" alt="SDMCBM" /> <p>Placeholder</p></article> </div><img onload="check_count()" src="images/picjumbo.jpg" onload="check_count()" /></span>
									</div>
								</div>
							</section>
		</section>-->
			<!--<section class="sector-event">
				<ul>
					<li><article><img src="images/r.jpg"/><p>Event Name</p></article></li>
					<li><article><img src="images/r.jpg"/><p>Event Name</p></article></li>
					<li><article><img src="images/r.jpg"/><p>Event Name</p></article></li>
					<li><article><img src="images/r.jpg"/><p>Event Name</p></article></li>
					<li><article><img src="images/r.jpg"/><p>Event Name</p></article></li>
				</ul>
				<article>
					<h3 style="font-weight:300">Innovation at its best..</h3>
					<p>At Sygma we Strive to innovate and encourage creativity and discovery at every level,We believe innovation is the most important personal goals
					</p>
				</article>

			</section>-->
