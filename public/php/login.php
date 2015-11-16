<?php
var_dump($_POST);

//starts the session or resumes an existing one
session_start();

//gets the current session id
$sessionId = session_id();

$message = '';

//Checks to see if the form entry was previously set, if not than perform the actions
if(isset($_POST['username']) && isset($_POST['password'])){

	//sets the variable from what was collected through POST
	$username = htmlspecialchars(strip_tags(trim($_POST['username'])));
	$password = htmlspecialchars(strip_tags(trim($_POST['password'])));

	if($username == 'guest' && $password == 'password'){
		$_SESSION["LOGGED_IN_USER"]="{$username}";
		//redirects to the authorized page	
		header('Location: http://codeup.dev/php/authorized.php');
		die();
	} elseif($username != 'guest' && $password != 'password') { 
		$message = "**Incorrect Username or Password**";
		session_destroy();
	};
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method = "POST">
			<label>Username</label>
			<input type="text" name="username" id="username"><br>
			<label>Password</label>
			<input type="password" name="password" id="password"><br>
			<input type="submit" value="submit">
			<h2><?= $message ?></h2>
		</form>
	</body>
</html>