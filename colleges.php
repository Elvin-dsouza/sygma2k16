<!doctype html>

<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		if($_SESSION['logged'] == 0 )
		{
			header('Location: http://sygma.sdm.ac.in/admin/admin.php');
		}

	}
	else
	{
		header('Location: http://sygma.sdm.ac.in');
	}



?>
<html>
	<head>
		<link href="../css/style-dash.css" rel="stylesheet" type="text/css"/>
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
		<header style="padding:20px;">
		
			<span class="material-layer" style="display:none">
			</span>
			<p id="main-heading">College Management</p>


		</header>
		<?php
					if($_SESSION['permissions'] < 6)
					{
						echo "<div id='error'>

							<p id='main-heading'>Error: Access Denied, you are not authorised to view this page</p>
						</div>";
						die();

					}

					

		?>

			<nav>
				<a href="http://sygma.sdm.ac.in/admin/colleges.php">Colleges</a>
				<a href="http://sygma.sdm.ac.in/admin/reg-form.php">Registration</a>
				<a href="http://sygma.sdm.ac.in/admin/events.php">Event Management</a>
				<a href="http://sygma.sdm.ac.in/admin/events.php">Scores</a>
			</nav>
	
		
		<div id="error" style="display:none">

			<p id="main-heading">Error Message</p>
		</div>
		
		<div class="main-container">
			<div class="content">
		   <?php $c=new college();
				  $array=$c->createCollegeArray();
					for ($i=0; $i < $array[0]['max']; $i++) { 
							echo "<div class='option-container'>
				
					<div class='option'>
						<div class='option-header'>
							<p>".$array[$i]['c_id']." ".$array[$i]['college_name']."</p>
							
						</div>
					</div>"
							}			
			?>

			</div>
			</div>
			
				

		
		
		
			</table>
		<footer>

		</footer>

	




	</body>
</html>
