<?php


	require "mysql.login.php";
	
		print_r($_POST);
		print_r(file_get_contents('php://input'));
		$ilogin= new login();
		$flag=$ilogin->user_register($_POST);
		if($flag)
		{
			$_SESSION['error']=$flag;
			echo "Registration terminated with error code:" . $flag;
			
			
		}
		else
		{
			$_SESSION['logged']=1;
			echo " Registration Successful"

	
			
		}
		print_r($_POST);
		print_r($_GET);
		echo "processing with error code:" . $flag;

	

?>