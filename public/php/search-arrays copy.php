<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$compare = array_intersect($names, $compare);

$result = count($compare);
print_r($compare) . PHP_EOL;
echo $result . PHP_EOL;

function search($query, $array){
	$result = in_array($query, $array);
	if($result == true){
		return "True" . PHP_EOL;
	} else if($result == false){
		return "False" . PHP_EOL;
	}
}

echo search('Tina', $names);
echo search('Bob', $names);