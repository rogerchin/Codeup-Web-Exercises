<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function search($query, $array){
	$result = array_search($query, $array);
	if($result >=0){
		return "True" . PHP_EOL;
	} else if($result = false){
		return "False" . PHP_EOL;
	}
}

echo search('Tina', $names);
echo search('Bob', $names);