<?php
include ('config.php');
	$connection = mysql_connect($server, $database, $password); 
	if (!$connection)
	{
		die('There is a problem, get some coffee and check your configuration.' . mysql_error());
	}

	mysql_select_db($database, $connection);
	if (!mysql_select_db($database))
	{
		echo 'I am just a simple script, I am sorry, but I can\'t find a database, please consult a human. <br>';
		exit();
	}
?>	
	
