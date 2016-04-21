<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function finder($name, $array) 
{
	if (array_search($name, $array) !== FALSE) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function comparer($array1, $array2) 
{	
	$inCommon = 0;
	foreach ($array1 as $name) {
		if (finder($name, $array2)) {
			$inCommon++;
		} else {
			continue;
		}
	}
	return "The arrays have $inCommon item in common.";
}

function combineArrays($array1, $array2)
{
	$newArray = [];
	foreach ($array1 as $name) {
		$compareItem = array_shift($array2);
		if ($name == $compareItem) {
			array_push($newArray, $name);
		} else {
			array_push($newArray, $name, $compareItem);
		}
	}
	print_r($newArray);
}

// echo finder('Tina', $names);
// echo finder('Bob', $names);

// echo comparer($names, $compare);

echo combineArrays($names, $compare);