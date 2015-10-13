<?php
	include "college.register.php";
	$newobj=new college;
	$flag=$newobj->college_register($_POST);
	if($flag>0)
	{
		echo $flag;

	}
	
	



?>