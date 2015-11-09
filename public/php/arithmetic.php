<?php

function add($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    }
}

function subtract($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    }
}

function multiply($a, $b)
{	
	if(validateZero($b)){
		return errorMessages($a, $b, 'multiply by zero');
	} else if(validateNumber($a, $b)){
		return $a * $b;
	}
}

function divide($a, $b)
{	
	if (validateZero($b)){
		return errorMessages($a,$b, 'divide by zero');
	}elseif (validateNumber($a, $b)){
		return $a / $b;
	} else{
		return errorMessages($a,$b, 'non numeric');
	}
}

function modulus($a, $b)
{
	if(validateZero($b)){
		return errorMessages($a, $b, 'divide by zero');
	} elseif (validateNumber($a, $b)){
		return $a % $b;
	}
}

function errorMessages($a, $b, $errorType){
	switch($errorType) {
		case 'non numeric':
			echo "Error! Values given must be numeric! You gave {$a} and {$b}." . PHP_EOL;
			break;
		case 'divide by zero':
			echo "Error! You can't divide by zero! You gave {$a} and {$b}" . PHP_EOL;
			break;
		case 'multiply by zero':
			echo "Error! When you multiply by zero, it is equal to zero" . PHP_EOL;
			break;
		default:
			echo "Error not found" . PHP_EOL;
			break;
	}
	die();
}

function validateNumber($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return true;
	}
	return false;
}

function validateZero($b){
	return $b == 0;
}

echo add(8,5) . PHP_EOL;
echo subtract(8,5) . PHP_EOL;
echo multiply(8,0) . PHP_EOL;
echo divide(8,0) . PHP_EOL;
echo modulus(8,5) . PHP_EOL;

