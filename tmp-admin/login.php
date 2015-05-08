<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

if(isset($_POST['tmp_username'])){
	
	$user_login = $_POST['tmp_username'];
	$user_pass = $_POST['tmp_password'];
	
	if ($user_login != "") {
		$user_login = filter_var($user_login,FILTER_SANITIZE_STRING);
	if ($user_login == "") { 
			$error_chk = 1;
			$message .= '<li>Please enter a valid username.</li>'; 
	}					
	} else { 
			$error_chk = 1;
			$message .= '<li>Please enter a username.</li>'; 		
	}
	if($user_pass==""){
		$error_chk = 1;
		$message .= '<li>Please enter a password.</li>';
	}
    
    
    /* TODO: 
         - Check username & password against the stored credentials.    
    */
	
	
	if($error_chk==0){
	
		include('sys/TMP_Config.php');
		include('sys/classes/TMP_Encrypt.php');
		include('sys/controllers/TMP_Login.php');
		
		$encrypt = new ENCRYPT();
		$login = new LOGIN($encrypt);
		$login_check = $login->check_login($user_login,$user_pass);
		
		session_start();
		
		$_SESSION['api_key'] = __apikey;
		$_SESSION['tmp_key'] = $encrypt->create_salt(sha1(time()+(7*24*60*60)));
		$_SESSION['remote_ip'] = sha1($_SERVER['REMOTE_ADDR']);
		
		header('location: index.php');
		exit();
		
	
	}else {
		
		$login_check ='<ul>'.$message.'</ul>';	
		
	}
	
}

echo ($login_check.'<!DOCTYPE HTML> 
<html>
<head>
						
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						
	<title>[ ADMIN ] - Simple Dynamic Template System - '.$title.'</title>
	
	<link rel="stylesheet" href="lb/css/styles.css" />
						
</head>
						
<body>

	<div id="login-form">
	
		<h1>Admin Portal</h1>
		
		<form name="tmp_login" action="login.php" method="post">
	
			<div class="input-form-item">
				<div class="input-form-label">Username:</div>
				<input type="text" name="tmp_username" />
			</div>
			
			<div class="input-form-item">
				<div class="input-form-label">Password:</div>
				<input type="password" name="tmp_password" />
			</div>
			
			<button class="submit-btn">LOGIN</button>
		
		</form>
		
	</div>
	
</body>
</html>

');

?>