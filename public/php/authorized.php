<?php


session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>AUTHORIZEDD</h1>

		<h2>Hello <?= $_SESSION["LOGGED_IN_USER"]?> </h2>
		<a href="/php/login.php">Log Out </a>
	</body>
</html>