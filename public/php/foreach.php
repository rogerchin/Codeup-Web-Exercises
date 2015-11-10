<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thingy) {
	if(is_string($thingy)){
		
	}
}

foreach ($things as $thingy) {
	if(is_int($thingy)) {
		echo "{$thingy} is a integer" . PHP_EOL;
	} else if(is_float($thingy)){
		echo "{$thingy} is a float" . PHP_EOL;
	} else if(is_bool($thingy)){
		echo "{$thingy} is a boolean" . PHP_EOL;
	} else if(is_array($thingy)){
		echo "{$thingy} is an array" . PHP_EOL;
	} else if(is_null($thingy)){
		echo "{$thingy} is a null" . PHP_EOL;
	} else if(is_string($thingy)){
		echo "{$thingy} is a string" . PHP_EOL;
	}
}

foreach($things as $thingy) {
	echo "{$thingy}" . PHP_EOL;
}