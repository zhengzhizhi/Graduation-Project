<?php
	$uid = $_POST["u"];
	$pwd = $_POST["p"];	
	if($uid == "admin" && $pwd!="admin")
	{
		echo "OK";
	}
	else
	{
		echo "NO";
	}
?>