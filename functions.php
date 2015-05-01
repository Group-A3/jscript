<?php
	include('config.php');
	
	function sec_session_start() //creates a secure session
	{
		$session_name = 'sec_session_id'; //Sets a custom session name
		$secure = SECURE;
		$httponly = true;
		//Forces session to use cookies
		if(ini_set('session.use_only_cookies', 1)==FALSE)
		{
			//header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
			echo 'Could not initiate a safe session';
			exit();
		}
		$cookieParams = session_get_cookie_params();
		session_get_cookie_params($cookieParams["lifetime"], $cookieParams["path"], 
		$cookieParams["domain"], $secure, $httponly);
		session_name($session_name);
		session_start();
		session_regenerate_id(true);
	}
	
	//fuction login($email, $password, $dbconn)
	{
		//using prepared statements to prevent sql injection
		//if($stmt = $dbconn->prepare('SELECT id, username, password, salt FROM users WHERE email = ? LIMIT 1'))
		//{
			//$stmt->bind_param('s', $email);
			//$stmt->execute();
			//$stmt->store_result();
			//$stmt->bind_result($user_id, $username, $db_password);
			//$stmt->fetch();
			//Hashes the password with unique salt
			//$password = md5($password);
			//if($stmt->num_rows==1)//Checks if the user exists
			//{
				//Checks if password in the database matches the password submitted
				//if($db_password == $password)
				//{
					//$user_browser = $_SERVER['HTTP_USER_AGENT'];
					//$_SESSION['user_id'] = $user_id;
					//$_SESSION['username'] = $username;
					//$_SESSION['login_string'] = md5($password . $user_browser);
					//login successful
					//return true;
				//}
				//else
				//{
					//password incorrect
					//return false;
				//}
			//}
		//}
		//else
		//{
			//no user exists
			//return false;
		//}
	}
	//fuction login_check($dbconn)
	//{
		//if(isset($_SESSION['user_id'], $_SESSION['username'],$_SESSION['login_string']))
		//{
			//$user_id = $_SESSION['user_id'];
			//$login_string = $_SESSION['login_string'];
			//$username = $_SESSION['username'];
			
			//$user_browser = $_SESSION['HTTP_USER_AGENT'];
			//if($stmt = $dbconn->prepare('SELECT password FROM users WHERE id =? LIMIT 1'))
			//{
				//$stmt->bind_param('i', $user_id);
				//$stmt->execute();
				//$stmt->store_result();
				
				//if($stmt->num_rows == 1)
				//{
					//$stmt->bind_result($password);
					//$stmt->fetch();
					//$login_check = md5($password . $user_browser);
					
					//if($login_check == $login_string)
					//{
						//logged in
				//		return true;
					//}
					//else
					//{
						//not logged in
						//return false;
					//}
				//}
				//else
				//{
					//return false;
				//}
			//}
			//else
			//{
				//return false;
			//}
		//}
		//else
		//{
			//return false;
		//}
	//}
?>