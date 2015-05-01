<?php
	include('config.php');
	//include('functions.php');
	
	session_start();
	if(!session_is_registered(username)){
		header("location:homepage.php");
	}
?>

<html>
	<body>
	Login Successful
	</body>
</html>
?>