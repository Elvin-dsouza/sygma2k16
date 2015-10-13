<?php

	session_start();
	require "mysql.login.php";
	if(!isset($_SESSION['logged']) || $_SESSION['logged']!=1)
	{
		$ilogin= new login();
		$flag=$ilogin->verifyuser($_POST);
		if($flag == 1)
		{
			$_SESSION['error']=$flag;
			header('Location:index.php');
		}
		else
		{
			$_SESSION['logged']=1;
			header('Location:dash.php');
		}

	}

?>
