<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1, $array2){
	$newArray = []; 
	
	if(count($array1) == count($array2)){
		$arrayLength = count($array1);
	};

	for($i=0; $i<$arrayLength; $i++){
		if($array1[$i]!=$array2[$i]){
			array_push($newArray, $array1[$i]);
			array_push($newArray, $array2[$i]);
		} else if ($array1[$i]===$array2[$i]){
			array_push($newArray, $array1[$i]);
		}
	}
	print_r($newArray);
}

combine_arrays($names,$compare);







// $compare = array_intersect($names, $compare);

// $result = count($compare);
// print_r($compare) . PHP_EOL;
// echo $result . PHP_EOL;

// function search($query, $array){
// 	$result = in_array($query, $array);
// 	if($result == true){
// 		return "True" . PHP_EOL;
// 	} else if($result == false){
// 		return "False" . PHP_EOL;
// 	}
// }

// echo search('Tina', $names);
// echo search('Bob', $names);