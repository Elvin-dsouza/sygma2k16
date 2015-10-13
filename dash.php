<!doctype html>

<?php
	session_start();
	/*if(isset($_SESSION['logged']))
	{
		if($_SESSION['logged'] == 0 )
		{
			header('location:../syg/index.php');
		}

	}
	else
	{
		header('location:../syg/index.php');
	}*/



?>
<html>
	<head>
		<link href="css/style-dash.css" rel="stylesheet" type="text/css"/>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Sygma 2016-Dashboard</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:600,300,400700,600,800,900italic' rel='stylesheet' type='text/css'>
		<meta name="description" content="Sygma Is a State Level IT Fest Organised By Shri Dharmasthala Manjunatheshwara College of Business Management Mangalore
						To Provide a Platform for budding IT Professionals and Technology Enthusiasts to gain Real world experience and showcase thier Various Talents
						Sygma Provides a whole host of events ranging from Technical to Communicational Events.">
		<meta name="keywords" content="SDM,Fest,sygma,sygma 2016, SDM mangalore, mangalore IT fest">
		<meta name="theme-color" content="#607D8B">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>


	</head>
	<body>
		<header>
			<img src="background.jpg"/>
			<div class="color-layer">
			</div>
			<span class="material-layer" style="display:none">
			</span>
			<p id="main-heading">Sygma Administrative Tools</p>
			<nav id="main-nav">
				<span><a href="#">Colleges </a></span>
				<span><a href="#">Members </a></span>
				<span><a href="#">Events </a></span>
				<span><a href="#">Rounds </a></span>
				<span><a href="#">scores</a></span>
			</nav>

		</header>
		<main>


	<table class="tg" style="undefined;table-layout: fixed; width: 1028px">
	<colgroup>
	<col style="width: 72px">
	<col style="width: 331px">
	<col style="width: 162px">
	<col style="width: 132px">
	<col style="width: 116px">
	<col style="width: 215px">
	</colgroup>
	  <tr>
	    <th class="tg-031e">user_id</th>
	    <th class="tg-031e">Name</th>
	    <th class="tg-031e">Permission</th>
	    <th class="tg-031e">event_id</th>
	    <th class="tg-031e">college_id</th>
	    <th class="tg-031e">Email</th>
	  </tr>


				<?php

					include "mysql.login.php";
					$obj= new login();
					$MAX_USERS=$obj->get_max_users();

					for($i=0; $i < $MAX_USERS; $i++)
					{
						$array=$obj->user_details($i+1);
						echo '<tr><td class="tg-031e">'. $array['uid'].'</td>
						<td class="tg-031e">'.$array['name'] .'</td>
						<td class="tg-031e">'.$array['permission'] .'</td>
						<td class="tg-031e">'.$array['eid'] .'</td>
						<td class="tg-031e">'.$array['cid'] .'</td>
						<td class="tg-031e">'.$array['email'] .'</td>
						</tr>';

					}

				?>

			</table>

			<table class="tg" style="undefined;table-layout: fixed; width: 1028px">
		<colgroup>
		<col style="width: 72px">
		<col style="width: 331px">
		<col style="width: 162px">
		<col style="width: 132px">
		<col style="width: 116px">
		<col style="width: 215px">
		</colgroup>
		  <tr>
		    <th class="tg-031e">college_id</th>
		    <th class="tg-031e">College name/Code</th>

		  </tr>
		  			<?php

						include "college.register.php";
						$obj= new college();
						$MAX_USERS=$obj->get_max_colleges();

						for($i=0; $i < $MAX_USERS; $i++)
						{
							$array=$obj->college_details($i+1);
							echo '<tr><td class="tg-031e">'. $array['cid'].'</td>
							<td class="tg-031e">'.$array['code'] .'</td>

							</tr>';

						}

					?>

				</table>
			<section>
				<article>
					<h3>Register College</h3>
					<form action ="college_register.php" method="post">
						<input type="text" name="college_name" placeholder="college name"required/>
						<input type="text" name="contact_email" placeholder="email"required/>
						<input type="text" name="college_code" placeholder="code"required/>
						<input type="submit" text="submit"/>
					</form>

				</article>

				<article>
					<h3>Register New Event</h3>
					<form action ="event_register.php" method="post">
						<input type="text" name="event_name" placeholder="college name"required/>

						<input type="submit" text="submit"/>
					</form>
				</article>

			</section>
			<section>
				<article>
					<h3>Register New Participant</h3>
					<form action ="register_p.php" method="post">
						<input type="text" name="name" placeholder="participant name"required/>
						<input type="text" name="number" placeholder="participant phone Number"required/>
						<select name="event_id" placeholder="Event" >
							<option value="1">Web Design</option>

						</select>
						<select name="college_id" placeholder="College" required>
							<?php

							$obj= new college();
							$MAX_USERS=$obj->get_max_colleges();
							for($i=0; $i < $MAX_USERS; $i++)
							{
								$array=$obj->college_details($i+1);
								echo "<option value=".$array['cid'].">". $array['college_name'] ."</option>";

							}

							?>

						</select>
						<input type="submit" text="submit"/>
					</form>
				</article>
				<article>
					<h3>Register New Round</h3>
					<form action ="event_register.php" method="post">
						<input type="text" name="event_name" placeholder="college name"required/>

						<input type="submit" text="submit"/>
					</form>
				</article>


			</section>
			<section>

				<article>
					<h3>Change users Permissions</h3>
					<form action ="perm.php" method="post">
						<input type="number" name="user_id" placeholder="user"required/>
						<input type="number" name="permission" placeholder="user"required/>
						<input type="submit" text="submit"/>
					</form>
				</article>


			</section>
		</main>
		<footer>

		</footer>

	<script>
		var animated = false;
		var cols = [

    		"#3F51B5",
    		"#2196F3",
   			"#009688",
   			"#8BC34A",
    		"#673AB7",
		];
		$('#main-nav span').each(function(i){
			$(this).attr('id',i);
		});
		$('#main-nav > span').click(function(e){

			if(animated == false)
			{
				animated = true;
				var $layer =$("header >span");
				$layer.show();

				var posx=$('#main-nav').parent().offset().left,
				posy=$('#main-nav').parent().offset().top;
				$layer.css({
					"top":(e.pageY-posy-25)+' ',
					"left":(e.pageX-posx-25)+ ' '
				});
				var cid=$(this).attr('id');
				$("header > span").addClass('materialise');

				$(".color-layer").css({
					"background-color":cols[cid]+ ' '
				});
				setTimeout(function(){
					$layer.removeClass("materialise");
					$layer.hide();
					animated=false;
				},900);
			}

		});

		function toggleBar()
		{
			$(".side-bar").toggle();
			$(".side-bar").toggleClass('slide');
		}

	</script>




	</body>
</html>
