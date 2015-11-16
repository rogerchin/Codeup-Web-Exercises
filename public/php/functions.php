<?php

$firstName = 'Roger';
$lastName = 'Chin';

function sayHello(#firstName, $lastName) {
	return "Hello $firstName $lastName";
}

echo sayHello($firstName, $lastName) . PHP_EOL;