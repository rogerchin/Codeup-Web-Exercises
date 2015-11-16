<?php
$nouns = ['Alligator', 'Brick', 'Potato', 'Underwear', 'Stick', 'Horse', 'Cheetah', 'Brain', 'Jack', 'Cat' ];
$adjectives = ['Hungry', 'Happy', 'Angry', 'Ugly', 'Rabid', 'Deteriorating', 'Melting', 'Horrendous', 'Morbid', 'Egotistical' ];

$randomNoun = $nouns[array_rand($nouns)];
$randomAdjective = $adjectives[array_rand($adjectives)];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Server Name Generator</title>
		<link rel="stylesheet" href="css/server-name-generator.css">
	</head>
	<body>
		<div class="generator">
			<h1><?= $randomAdjective . " " . $randomNoun; ?></h1>
		</div>
	</body>
</html>