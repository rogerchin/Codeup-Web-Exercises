<?php

if($argc == 1) {
	$randomNum = rand(1,100);
	echo "I am thinking a number between 1 and 100\n";
} elseif($argc == 3 && $argv[1]>$argv[2]){
	$randomNum = rand($argv[2],$argv[1]);
	echo "I am thinking a number between {$argv[2]} and {$argv[1]}\n";
} else if ($argc == 3 && $argv[2]>$argv[1]){
	$randomNum = rand($argv[1], $argv[2]);
	echo "I am thinking a number between {$argv[1]} and {$argv[2]}\n";
}

// echo $randomNum . PHP_EOL;

do {
		fwrite(STDOUT, 'What is your guess? :');
		$guess = fgets(STDIN);
		if(intVal($randomNum) > intVal($guess)){
			echo "higher\n";
		} else if(intVal($randomNum) < intVal($guess)){
			echo "lower\n";
		} else if(intVal($randomNum) == intVal($guess)){
			echo "GOOD GUESS!!!\n";
			exit(0);
		}
} while (intVal($randomNum) != intVal($guess));


?>