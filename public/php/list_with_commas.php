<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$explodedPhysicists = explode(', ', $physicistsString);

function humanizedlist($array, $sort = false){

	if($sort){
		sort($array);
	}
	
	$lastItem = 'and ' .  array_pop($explodedPhysicists);

	array_push($array, $lastItem);
	// $array[] = $lastItem;

	$string = implode(', ', $array);

	return $string;
}

echo $newPhysicistsString;


?>