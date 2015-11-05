<?php
fwrite(STDOUT, "What is your starting number? ");
$input1 = trim(fgets(STDIN));
fwrite(STDOUT, "What is your ending number? ");
$input2 = trim(fgets(STDIN));

if($input1 > $input2) {
	$startNum = $input2;
	$endNum = $input1;
} else if ($input1 < $input2){
	$startNum = $input1;
	$endNum = $input2;
}

if (is_numeric($startNum) && is_numeric($endNum)) {
	for($i=$startNum; $i<= $endNum; $i++) {
		if($i % 15== 0){
			echo "FizzBuzz" . PHP_EOL;
		} else if ($i % 3 == 0){
			echo "Fizz" . PHP_EOL;
		} else if ($i % 5 == 0){
			echo "Buzz" . PHP_EOL;
		} else {
			echo $i . PHP_EOL;
		}
	}
} else {
	echo "Wrong Inputs. Try Again" . PHP_EOL;
}





