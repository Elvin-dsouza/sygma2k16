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
		<link rel="shortcut icon" href="images/favicon.ico">
		<script src="js/swipe.js"></script>
		<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
		<![endif]-->

	</head>
	<body>
		<?php require "inline-svg.php";?>


		<header>

			<video autoplay muted loop  id="bgvid">

			    <source src="images/video.mp4" type="video/mp4">
			</video>
			<article id="heading-area">
				<figure><img src="images/logo.svg" alt="SDMCBM" /></figure>
				<!--<h1>Sygma 2016</h1>
				<p>A State Level IT Fest</p>-->
				<nav id="nav-icons"><svg class="icon-arrow" onclick="scrollhere();"><use xlink:href="#icon-arrow_drop_down"></use></svg></nav>
			</article>
			<nav id="social-bar">
				<a href="https://www.facebook.com/sygma16/"><svg class="icon-social" id="icon-fb"><use xlink:href="#icon-facebook3"></use></svg></a>
				<a href="https://www.youtube.com/channel/UCdH8ON25LtlypHJeljkGsAw"><svg class="icon-social" id="icon-yt"><use xlink:href="#icon-youtube3"></use></svg></a>
				<a href="https://twitter.com/sygma16"><svg class="icon-social" id="icon-tw"><use xlink:href="#icon-twitter"></use></svg></a>
				<svg class="icon-social" id="icon-tw"><use xlink:href="#icon-google-plus3"></use></svg>
			</nav>

		</header>

		<!--[End of Header] -->
		<!--[Start of Main Content Wrapper] -->
		<div class="modal" id="rules-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<h3>Rules and Regulations</h3>
				<p class="desc">


					<ul>
					<li>  The fest is open to under graduate students</li>
					<li>  The Entry Fee is Rs 250 per college</li>
					<li>  Do  Confirm your participation via phone or email at the earliest</li>
					<li>  One team from each college can register</li>
					<li>  Each team should have 12  participants and no participant can participate
					     in more than  one event</li>
					<li>  Teams should report at the registration counter before 8:30 am</li>
					<li>  All participants must carry their college ID cards and present an
					     authorization letter from their principal at the time of registration</li>
					<li>  Judges decision will be final and binding by all regards</li>
					<li>  Punctuality and descipline are of primary concern</li>
					<li>  Indecency/vulgarity or any kind of objectinable behaviour by any students
					     will not be tolerated</li>
 					</ul>


					</p>
			</article>
		</div>
		<div class="modal" id="codenet-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/codenet.png" alt="SDMCBM" style="width:150px; height:150px; margin:0 auto;"  />
				<h3>Code Net</h3>
				<p>Web design Event</p>
				<p class="desc">
					Code net is an event that is designed to test the
					skills of web designers, participants will be
					provided with fun, as well as competitive
					challenges that will showcase design skills and
					their ability to come up with the best solution to a
					problem in the shortest amount of time.
					<ul>
						<b>Requirements</b>
						<li>  HTML And CSS</li>

						<li>1 participant per college</li>
 					</ul>
					<ul>
						<h5>Contact</h5>
						<li>Elvin Dsouza : +91 9591349482</li>
						<li>Samanth Kumar: +91 8197420742</li>
 					</ul>

					</p>
			</article>
		</div>
		<div class="modal" id="codeinsight-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/code.png" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Code Insight</h3>
				<p>coding and debugging event</p>
				<p class="desc">
					Code Insight clearly points about the vision that the
					programmer should have before developing solution to a
					problem.The event test the logic and the ability of the
					programmer. As mentioned each program is developed for
					a problem and need a logical solution.
					<ul>
						<h5>Requirements</h5>
						<li>C++ and C</li>
						<li>2 participant's per college</li>
 					</ul>

 					<ul>
						<h5>Contact</h5>
						<li>Deepak R.S : +91 7022090569</li>
						<li>Sawan Kumar: +91 9743254874</li>
 					</ul>


					</p>
			</article>
		</div>
		<div class="modal" id="revolution-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/bm.png" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Revolutionary Entrepreneur</h3>
				<p>Best Manager Event</p>
				<p class="desc">
					Revolutionary Entrepreneur is an IT best manager event
					which helps a candidate in developing personal growth
					opportunities.It helps in gaining professional and technical
					knowledge.It guides an individual towards inculcating
					professional skills.
					<ul>
						<h5>Requirements: N/A</h5>
						<li>1 participant per college</li>
						 					</ul>

 					<ul>
						<h5>Contact</h5>
						<li>Akarsh Naveen : +91 9845258282</li>
						<li>Sushmitha Kini: +91 9591767035</li>
 					</ul>


					</p>
			</article>
		</div>
		<div class="modal" id="quiz-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/tek.png" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Teknowit</h3>
				<p>IT Quiz Event</p>
				<p class="desc">
					We are All quizzers! Fire up your grey matter. Teknowit
					is an IT quiz  competition this event appraises the
					partakers knowhow about technology.
					<ul>
						<li>Requirements: N/A</li>
						<li>2 participant's per college</li>
					</ul>

 					<ul>


						<h5>Contact</h5>
							<li></li>
							<li>R.K Nikash	      +91 8971149725</li>
							<li>Aishwarya K.V     +91 8593064232</li>

 					</ul>


					</p>
			</article>
		</div>

		<div class="modal" id="debate-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/debate.jpg" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Debatabase</h3>
				<p>IT Ad and Debate Event</p>
				<p class="desc">
					IT Debate  and Advertisement event focuses on
					Arguement and the ability to convince verbally
					<ul>
						<li>Requirements: N/A</li>
						<li>2 participant's per college</li>
					</ul>

 					<ul>


						<h5>Contact</h5>
							<li></li>
							<li>Steven Dsouza	   +91 8553810383</li>
							<li>Monisha A.G        +91 9972657102</li>

 					</ul>


					</p>
			</article>
		</div>
		<div class="modal" id="client-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/clyens.png" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Clyens Necto</h3>
				<p>Client Connect</p>
				<p class="desc">
					This event is about proving participants abilities
					in managing business relations.
					<ul>
						<li>Requirements: N/A</li>
						<li>1 participant's per college</li>
					</ul>

 					<ul>


						<h5>Contact</h5>
							<li></li>
							<li>Nidha Nausheen	+91 9611547030</li>
							<li>Kawyashree      +91 8105189436</li>

 					</ul>


					</p>
			</article>
		</div>
		<div class="modal" id="dflash-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/flash.jpg" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>D-Flash</h3>
				<p>E-News Event</p>
				<p class="desc">
					This is an E-news event that focuses on showcasing
					the people’s talents by means of Digital
					Communication.
					<ul>
						<li>Requirements: Camera's and Laptops</li>
						<li>1 participant's per college</li>
					</ul>

 					<ul>


						<h5>Contact</h5>
							<li></li>
							<li>Mayur Nayak	    +91 7204958725</li>
							<li>Durgashree      +91 7204734392</li>

 					</ul>


					</p>
			</article>
		</div>

		<div class="modal" id="smartscav-modal" style="display:none">
			<svg class="icon_close_modal" onclick="$(this).parent().hide();"><use xlink:href="#icon-clear"></use></svg>
			<article>
				<img src="images/scav.png" alt="SDMCBM" style="width:200px; height:150px; margin:0 auto;"  />
				<h3>Smart Scavenger</h3>
				<p>Treasure Hunt Event</p>
				<p class="desc">
					Smart scavenger is an information based treasure hunt in
					in which teams use their collective brain power to solve clues
					which teams must solve in order to find place of information.
					<ul>
						<li>Requirements: Smart phone (mandatory)</li>
						<li>2 participant's per college</li>
					</ul>

 					<ul>
						<h5>Contact</h5>
							<li>Deeksha Rai	    +91 9901661064</li>
							<li>Sharafath       +91 9740122324</li>
							<li>Ibrahim 	    +91 8050131357</li>
							<li>Pavan Kumar     +91 9538973959</li>
 					</ul>


					</p>
			</article>
		</div>
		<section class="main-nav">
			<svg class="icon-ham" id="icon-fb"><use xlink:href="#icon-menu"></use></svg>
			<nav>
				<a  id= "nav-about-button" onclick="scrollnav('#sector');">About</a>
				<a  id= "nav-video-button"onclick="scrollnav('.video-sector');">Video</a>
				<a  id= "nav-theme-button"onclick="scrollnav('.theme-showcase');">Theme</a>
				<a  id= "nav-event-button"onclick="scrollnav('.event-section');">Events</a>
				<a  id= "nav-contact-button"onclick="scrollnav('.event-head-section');">Team</a>
			</nav>
		</section>
		<section id="content">
			<section id="sector" class="column">
				<article id="article-desc">
					<h3>SYGMA 2016<br/>A State Level IT Fest</h3>
					<p class="desc">
						One of the leading business management colleges in Mangaluru,NAAC re-accredited with 'A' grade, affiliated to Mangalore University,
						pioneer in Management education of  undergraduate level established and managed under the patronage of Shri Dharmasthala Manjunatheshwara Education Society,
						Ujire (D.K).  The institution focuses on preparing students to face the global business challenges.
						SYGMA is a state level IT fest organised by Shri Dharmasthala Manjunatheshwara college of business management Mangalore
						to provide a platform for budding IT professionals and technology enthusiasts to gain real world experience and showcase thier skills.
					</p>

				</article>
				</article>
			</section>
			<section id="sector2">
				<article id="article-grid">
					<div id="grid-row">
						<div id="grid-item" class="item-info">

							<!--img src="images/ed.jpg" alt="SDMCBM" />-->
							<svg class="icon"><use xlink:href="#icon-location_city"></use></svg>
							<article>
									<h3>Venue</h3>
									<p>Shri Dharmasthala Manjunatheshwara College Mangalore</p>
							</article>
						</div>
						<div id="grid-item" class="item-info">
							<svg class="icon" ><use xlink:href="#icon-schedule"></use></svg>
							<!--<img src="images/clk.jpg" alt="SDMCBM" />-->
							<article>
									<h3>Date/Time</h3>
									<p><time>January 23rd 2016, 9:00 AM</time>
										<!--<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=SYGMA%20016&dates=20160123T010000Z/20160123T020000Z&details=State%20Level%20IT%20Fest%20Organised%20By%20SDM%20College%20Mangalore"> > </a>
									--></p>
							</article>
						</div>
						<div id="grid-item" class="item-info" onclick="$('#rules-modal').show();" >
							<svg class="icon" ><use xlink:href="#icon-local_library"></use></svg>

							<article>
									<h3>Rules</h3>
									<p>Click to Learn more</p>
							</article>
						</div>
					</div>
				</article>
			</section>

				<section class="video-sector">
					<article>
					<h3 style="font-weight:300; margin-top:10vh;">Get a Taste of What makes sygma Amazing..</h3>


					</article>
					<section class="video-container">
						<figure class="offset-b">
							<img src="https://placeimg.com/640/480/tech" alt="SDMCBM" />
							<figcaption class="shown-play-icon"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>welcome to Sygma</p></figcaption>
						</figure>
						<figure class="middle">
							<img src="https://placeimg.com/640/480/tech" alt="SDMCBM" />
							<figcaption class="shown-play-icon"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>promo</p></figcaption>
						</figure>
						<figure class="offset-a">
							<img src="http://img.youtube.com/vi/_6jKeqfB6O4/0.jpg" style="width:300px; height:250px;" alt="SDMCBM" />
							<figcaption class="shown-play-icon"><a style="color:white" href="https://www.youtube.com/watch?v=_6jKeqfB6O4"><svg class="icon-play" onclick="scrollhere();"><use xlink:href="#icon-play_circle_filled"></use></svg><p>First Look</p></a></figcaption>
						</figure>

					</section>
					<section><a href="https://www.youtube.com/channel/UCdH8ON25LtlypHJeljkGsAw"><div class="material-button raised  " style="width:200px;font-size:20px;padding:20px;"><div class="material-layer light" style="width:10px; height:10px; border-radius:50%;"></div>Follow on Youtube</div></a></section>
				</section>
		<section class="theme-showcase-sector">

			<section class="theme-showcase">
					<article><h3>Digital Renaissance</h3>
					<p style="  padding-top:10px; max-width:80%; margin:0 auto; ">A Revolution Towards Digital india</p>
					<p style="  padding-top:10px; max-width:80%; margin:0 auto; ">

					Renaissance in the 15th and 16th centuries was the
					result of the introduction of the machines and implementation of techniques
					of mass production Similarly the modern world is on the cusp of digital revolution,
					digitalisation is going to lift millions of people out of poverty through employment
					creation and through dissemination of knowledge.The present world is
					undergoing a digital renaissance or a digital rebirth.We see it around us,
					we see the influence of digital technologies in all the phases of our life. So to
					highlight the digitalisation of the world, we chose the theme of digital renaissance
					for sygma 2016</p>
					</article>
			</section>
		</section>
		<section class="event-section">
			<article><h2>Exciting Events Designed to Challenge even the most experienced Professionals</h2></article>
			<section class="event-slider">
				<span><svg class="chevron-left" id="btnarrow"><use xlink:href="#icon-chevron_right"></use></svg><svg class="chevron-right facing-right" id="btnarrow"><use xlink:href="#icon-chevron_right"></use></svg></span>
				<section class="event-slide-container">
					<article class="card-art">	<img src="images/code.png"  style="width:90%; margin:0 auto;" alt="SDMCBM" /><h3>Code Insight</h3><p><br/>For Code Geeks and Debuggers</p><div class="material-button flat" onclick="$('#codeinsight-modal').show();"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/bm.png" style="width:55%; margin:0 auto;" alt="SDMCBM" /><h3>Revolutionary Entrepeneur</h3><p>People with great personalities rise high, can you rise higher</p><div onclick="$('#revolution-modal').show();"class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/codenet.png" alt="SDMCBM" style="width:60%; margin:0 auto;"  /><h3>Codenet</h3><p>Creativity Inginuity and Flexibilty, Can you master them all?</p><div onclick="$('#codenet-modal').show();"class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/scav.png" alt="SDMCBM" /><h3>Smart Scavenger</h3><p>Think on your feet, Each decision may affect your outcome</p><div onclick="$('#smartscav-modal').show();" class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img  src="images/tek.png" alt="SDMCBM"style="width:80%; margin:0 auto;" /><h3>Technowit</h3><p><br/>We all are Quizzers! Fire up your grey matter. </p><div onclick="$('#quiz-modal').show();"class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/debate.jpg" alt="SDMCBM" /><h3>IT Debatabase</h3><p><br/>"The Platform for masters of logic and debate. Great debaters can talk thier way out of any scenario.</p><div onclick="$('#debate-modal').show();" class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/flash.jpg" alt="SDMCBM" /><h3>D-Flash</h3><p><br/> E-news event that focuses on showcasing
					the people’s talents by means of Digital
					Communication.</p><div onclick="$('#dflash-modal').show();"class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
					<article class="card-art">	<img src="images/clyens.png" alt="SDMCBM"  /><h3>Clyens Necto</h3><p><br/>This event is about proving participants abilities
					in managing business relations.</p><div onclick="$('#client-modal').show();"class="material-button flat"><div class="material-layer dark"></div>LEARN MORE</div></article>
				</section>
			</section>
		</section>



<section class="contact-section">
			<div class="contact-container">
				<h2>Get in touch...</h2>
				<section>
					<aside>
						<img style="border:5px solid white;"src="images/map.png" alt="map">
						<a href="http://maps.google.co.in" style="margin:0px; display:block; width:auto;"><div class="material-button raised  " style="width:200px; margin-top:15px; font-size:20px; padding:20px;  margin-right:0px; margin-left:0px;" ><div class="material-layer light" style="width:10px; height:10px; border-radius:50%;"></div>View on Maps</div></a>
					</aside>
					<section>
						<article class="contact-info" style="margin-top:50px;align-items:center;justify-content:center;">
							<img style="margin:0 auto;border:5px solid white;"src="images/pp.jpg"/>
							<p>Shivaprasad V Bhat<br/>
							CEO Sygma<br/>
							Ph:+91 87470 68496<br/></p>
						</article>

					</section>
				</section>


			</div>
</section>
		<footer>


			<section>
				<article>

					<h3>SYGMA 2016</h3>
					<p>SDM College of Business Management Mangalore</p>
					<p>Email: sygma@sdm.ac.in</p>
					<p>Ph:0824 2424186</p>
					<a href="http://sdm.ac.in"><div class="material-button raised" style="width:70px"><div class="material-layer light"></div>Visit Website</div></a>
				</article>
				<aside>
					<h3>FOLLOW SYGMA</h3>
					<nav>
						<a href="https://www.facebook.com/sygma16/">Facebook</a>
						<a href="https://twitter.com/sygma16">Twitter</a>
						<a href="https://www.youtube.com/channel/UCdH8ON25LtlypHJeljkGsAw">Youtube</a>
						<a href="#">Google Plus</a>

				</aside>
				<aside>
					<h3>LINKS</h3>
					<nav>

						<a href="#">Online Registeration</a>
						<a href="#">Videos</a>
						<a href="#">About</a>
						<a href="#">Contact</a>
						<a href="admin/admin.php">Admin Login</a>
						<a href="admin/manage.php">Administration Tools</a>
						<a href="#">Back to Top</a>
					</nav>
				</aside>
			</section>

		</footer>
		<script src='js/script.js'></script>



	</body>
</html>
