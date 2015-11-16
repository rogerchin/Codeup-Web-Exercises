<?php
$nouns = ['Alligator', 'Brick', 'Potato', 'Underwear', 'Shorty', 'Horse', 'Cheetah', 'Brain', 'Jack', 'Cat' ];
$adjectives = ['Hungry', 'Happy', 'Angry', 'Ugly', 'Rabid', 'Deteriorating', 'Melting', 'Horrendous', 'Morbid', 'Egotistical' ];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Server Name Generator</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="/codeup.dev/public/css/bootstrap.css">
	</head>
	<body>
		<div class = "col-lg-1 col-centered">
			<h1><?php 
				echo $adjectives[array_rand($adjectives, 1)];
				echo " ";
				echo $nouns[array_rand($nouns, 1)];
			?>
		</div>
	</body>
</html>