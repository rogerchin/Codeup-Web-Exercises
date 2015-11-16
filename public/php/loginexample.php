<?php

session_start();

function pageController()
{
	if(isset($_SESSION['LOGGED_IN_USER'])){
		header('Location: authorized.php');
		die();
	}

	$username = ( isset($_POST['username'])) ? $_POST['username'] ; '';

}

	if( isAuthorized)



?>
