<?php 
		$handle=new mysqli('localhost','sygmaapp','sygelvshi15','sygma2015');
		$handle->query("CREATE TABLE IF NOT EXISTS `itquiz`(`p_id` INT(5) PRIMARY KEY AUTO_INCREMENT, `team_code` VARCHAR(50), `score` INT(10))");
		$q="SELECT * FROM itquiz";
		$res= $handle->query($q);
		if($res->num_rows)
		{
			for($i=1; $i< $res ->num_rows+1 ;$i++)
			{
				$q="SELECT * FROM `itquiz` WHERE p_id =".$i;
				$result = $handle->query($q);
				while($row = $result->fetch_assoc())
				{
					$height=500*$row['score']/30;
					echo "<div class='bar' style= 'height:". $height ."px;''><p class='rot'>". $row['team_code']." ".$row['score']."</p></div>";
				}
			}
			
		}
		else
		{
			echo "Waiting for participants...";
		}
?>