<?php
	include('config.php');
	//include('functions.php');
	
	sec_session_start();
	if(!session_is_registered(myusername)){
		header("location:main_login.php");
	}
?>

<html>
	<body>
	Login Successful
	</body>
</html>
?>