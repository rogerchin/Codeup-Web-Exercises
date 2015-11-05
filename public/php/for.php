<?php

fwrite(STDOUT, "What is your starting number? ");
$startNum = trim(fgets(STDIN));
fwrite(STDOUT, "What is your ending number? ");
$endNum = trim(fgets(STDIN));
fwrite(STDOUT, "What increment do you want to count by? ");
$increment = trim(fgets(STDIN));

for($i = $startNum; $i <= $endNum; $i+=$increment){
	echo $i . PHP_EOL;
}