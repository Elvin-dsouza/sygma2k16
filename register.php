<?php


	require "mysql.login.php";
	
	
		$ilogin= new login();
		$flag=$ilogin->user_register($_POST);
		if($flag)
		{
			$_SESSION['error']=$flag;
			header('Location:index.php');
		}
		else
		{
			$_SESSION['logged']=1;
			header('Location:dash.php');
		}

	

?>