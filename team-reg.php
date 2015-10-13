<?php 
		$handle=new mysqli('localhost','sygmaapp','sygelvshi15','sygma2015');
		$handle->query("CREATE TABLE IF NOT EXISTS `itquiz`(p_id INT(5) PRIMARY KEY AUTO_INCREMENT, team_code VARCHAR(50), score INT(10))");
		$user = $_POST['user'];
		echo "recieved";
		$q="INSERT INTO itquiz (team_code ,score) VALUES('".$user."',0)";
	
		$handle->query($q);
			
		
?>