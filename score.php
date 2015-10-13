<?php 
		$handle=new mysqli('localhost','sygmaapp','sygelvshi15','sygma2015');
		$handle->query("CREATE TABLE IF NOT EXISTS `itquiz`(p_id INT(5) PRIMARY KEY AUTO_INCREMENT, team_code VARCHAR(50), score INT(10))");
		$s = $_POST['s'];
		$user = $_POST['user'];
		$q="SELECT * FROM itquiz WHERE team_code ='".$user."'";
		$result= $handle->query($q);
		if($result->num_rows)
		{
			echo "recieved";
			while($row = $result->fetch_assoc())
			{
				$s = $row['score'] + $_POST['s'];
				$q="UPDATE itquiz SET score = ". $s ." WHERE team_code = '".$user."'";
				$handle->query($q);
			}
		}
		else
		{
			echo "idle";
		}
?>