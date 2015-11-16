<?php 
$things = ['motorcycles', 'cars', 'trucks', 'guns', 'trendy tech', 'shoes', 'video-games'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Favorite Things</title>
	</head>
	<body>
		<h1>My Favorite Things</h1>
		<ol>
			<?php foreach($things as $thing): ?>
				<li><?php echo $thing; ?></li>
			<?php endforeach; ?>
		</ol>	
	</body>
</html>