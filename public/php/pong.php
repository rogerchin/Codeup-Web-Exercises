<?php

$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Counter = <?= $counter ?></h2>
		<a href="http://codeup.dev/php/ping.php?counter=<?=$counter+1?>">HIT</a>
		<a href="http://codeup.dev/php/ping.php?counter=<?=$counter=0?>">MISS</a>
		

	</body>
</html>