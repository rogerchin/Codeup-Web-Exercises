<?php

$num = 1;
do {
	echo $num*2 . PHP_EOL;
	$num+=1;
} while ($num <= 50);

$int = 100;
do {
	echo $int . PHP_EOL;
	$int-=5;
} while ($int >= -10);
;

$poop = 2;

do {
	echo $poop . PHP_EOL;
	$poop *= $poop;
	
} while($poop <= 1000000);

?>