<?php

$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;


?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Counter = <?= $counter ?></h1>
		<a href="http://codeup.dev/php/counter.php?counter=<?=$counter+1?>">Up</a>
		<a href="http://codeup.dev/php/counter.php?counter=<?=$counter-1?>">Down</a>



	</body>
</html>