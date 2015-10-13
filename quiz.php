<!doctype html>
<?php

	session_start();
?>
<html>
	<head>
		<link href="css/quiz-page.css" rel="stylesheet" type="text/css"/>
		<meta name=viewport content="width=device-width, initial-scale=1">
		
		<title>Sygma 2016-A State Level IT Fest</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:600,300,400700,600,800,900italic' rel='stylesheet' type='text/css'>
		<meta name="description" content="Sygma Is a State Level IT Fest Organised By Shri Dharmasthala Manjunatheshwara College of Business Management Mangalore
						To Provide a Platform for budding IT Professionals and Technology Enthusiasts to gain Real world experience and showcase thier Various Talents
						Sygma Provides a whole host of events ranging from Technical to Communicational Events.">
		<meta name="keywords" content="SDM,Fest,sygma,sygma 2016, SDM mangalore, mangalore IT fest">
		<meta name="theme-color" content="#607D8B">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/mustache.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="favicon.ico">
	</head>
	<body>
		<?php require "inline-svg.php";?>
		


		

		<header>

			
			<article id="heading-area">
				<figure><img src="images/logo.png" alt="SDMCBM" /></figure>
				<h1>IT-Quiz Prelims</h1>
			</article>
		</header>
		<section id="content" >
			<nav class="main-nav">
				<a href="index.php"><div class="material-button square flat" style="padding:0px; "><div class="material-layer dark"></div><svg class="icon-back"><use xlink:href="#icon-arrow_back"></use></svg></div></a>
			</nav>
						
			<section class="card registration " style="margin-top:0px;">
				<section class="question-cover" style="display:none"></section>
				<h3>Welcome to the preliminary round of the Quiz:</h3>
				<input class="team-code" type="text" placeholder="Team Code"/>
				<div class="material-button circle raised team-accept" style=" width:50px; height:50px ; margin:50px; border-radius:50%;padding:0px; "><div class="material-layer light"></div><svg class="icon-check"><use xlink:href="#icon-check"></use></svg></div>

			</section>
			<section class="card question" >
				<section class="question-cover" style="display:none"></section>
				<h3>1.Firefox, Opera, Chrome, Safari and Explorer are all types of what?</h3>
				<form>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="FF" required/>Anti Virus</span>
						<span class="answer"><input type="radio" name="answer" value="FF" required/>Games</span>
					</span>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="AA" required/>Web Browsers</span>
						<span class="answer"><input type="radio" name="answer" value="FF" required/>None of the Above</span>
					</span>

				</form>
				<div class="material-button circle raised accept" style=" width:50px; height:50px ; border-radius:50%;padding:0px; "><div class="material-layer light"></div><svg class="icon-check"><use xlink:href="#icon-check"></use></svg></div>

			</section>

			<section class="card question" >
				<img class="hint-img" src="http://lorempixel.com/640/400/"/>
				<h3>1.Firefox, Opera, Chrome, Safari and Explorer are all types of what?</h3>
				<form>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="a"/>Anti Virus</span>
						<span class="answer"><input type="radio" name="answer" value="a"/>Games</span>
					</span>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="a"/>Web Browsers</span>
						<span class="answer"><input type="radio" name="answer" value="a"/>None of the Above</span>
					</span>

				</form>
				<div class="material-button circle raised" style=" width:50px; height:50px ; border-radius:50%;padding:0px; "><div class="material-layer light"></div><svg class="icon-check"><use xlink:href="#icon-check"></use></svg></div>

			</section>

		<section class="card question" >
				
				<h3>1.Firefox, Opera, Chrome, Safari and Explorer are all types of what?</h3>
				<form>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="FF" required/>Anti Virus</span>
						<span class="answer"><input type="radio" name="answer" value="FF" required/>Games</span>
					</span>
					<span class="answer-row">
						<span class="answer"><input type="radio" name="answer" value="AA" required/>Web Browsers</span>
						<span class="answer"><input type="radio" name="answer" value="FF" required/>None of the Above</span>
					</span>

				</form>
				<div class="material-button circle raised accept" style=" width:50px; height:50px ; border-radius:50%;padding:0px; "><div class="material-layer light"></div><svg class="icon-check"><use xlink:href="#icon-check"></use></svg></div>

			</section>

			<section class='card question' >
				<section class='question-cover' style='display:none'></section>
				<h3>1.Firefox, Opera, Chrome, Safari and Explorer are all types of what?</h3>
				<form>
					<span class='answer-row'>
						<span class='answer'><input type='radio' name='answer' value='FF' required/>Anti Virus</span>
						<span class='answer'><input type='radio' name='answer' value='FF' required/>Games</span>
					</span>
					<span class='answer-row'>
						<span class='answer'><input type='radio' name='answer' value='AA' required/>Web Browsers</span>
						<span class='answer'><input type='radio' name='answer' value='FF' required/>None of the Above</span>
					</span>

				</form>
				<div class="material-button circle raised accept" style=" width:50px; height:50px ; border-radius:50%;padding:0px; "><div class="material-layer light"></div><svg class="icon-check"><use xlink:href="#icon-check"></use></svg></div>

			</section>
				<footer>
			<section>
			<article>

				<h3>SYGMA 2016</h3>
				<p>SDM College of Business Management Mangalore</p>
				<p>Email: sygma@sdm.ac.in</p>
				<p>Ph:2398342324</p>
				<div class="material-button square raised" style="width:70px"><div class="material-layer light"></div>Visit Website</div>
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
		 <script type="text/javascript">
		      window.onbeforeunload = function() {
		          return "Exiting this screen ends the quiz Continue?"
      			}
    	</script>
			<script>
				var animStart = 0;
				var teamCodeName;
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
				 $(".accept").click(function(e){

				 		
				 			
				          $(this).parent().find(".question-cover").css({
				          	"display":"block"
				          });
				          var answer=$(this).parent().find("form input[type='radio'][name='answer']:checked").val();
				          var scor;
				          console.log(answer);
				          if(answer == 'AA')
				          	scor=10;

				          else
				          	scor=0;
				   		  $.post('score.php',{ 'user': teamCodeName,'s': scor , },
				   		  function(data,status){
				   		  		if(data == 'recieved')
				   		  		{
				   		  			window.alert('data-recieved');
				   		  		}
				   		  		else
				   		  		{
				   		  			window.alert('error:please contact admin');
				   		  		}
				   		  });	

		          });

				  $(".team-accept").click(function(e){

				 		
				 		
				          var team_code=$(this).parent().find("input").val();
				        	teamCodeName=team_code;	
				          
				   		  $.post('team-reg.php',{

				   		  	'user':team_code

				   		  },
				   		  function(data,status){
				   		  		if(data == 'recieved')
				   		  		{
				   		  			window.alert('data-recieved');
				   		  		}
				   		  		else
				   		  		{
				   		  			window.alert('error:please contact admin');
				   		  		}
				   		  });	

		          });
				/* $(".submit-info").click(function(e) {
				 	$.post('create_player.php',{

				 		team: $('input').val();

				 	}
				 	,function(data,status){
				 		if(data == 'true')
				 		{

				 		}

				 	});
				 });*/
			</script>

	</body>
</html>
