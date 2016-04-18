<?php 

$things = [
	'Sgt. Pepper',
	"11", 
	null, 
	array(1,2,3), 
	3.14, 
	"12 + 7", 
	false, 
	(string) 11
];

$thingNum = 1;

foreach ($things as $thingValue) {
	if (is_array($thingValue)) {
		echo "Thing number $thingNum is an array.\n";
		$thingNum++;
	} elseif (is_bool($thingValue)) {
		echo "Thing number $thingNum is a boolean.\n";
		$thingNum++;
	}elseif (is_float($thingValue)) {
		echo "Thing number $thingNum is a floating point number.\n";
		$thingNum++;
	}elseif (is_int($thingValue)) {
		echo "$thingValue is an integer.\n";
		$thingNum++;
	}elseif (is_null($thingValue)) {
		echo "Thing number $thingNum is nothing.\n";
		$thingNum++;
	}elseif (is_numeric($thingValue)) {
		echo "Thing number $thingNum is a numeric value.\n";
		$thingNum++;
	}
	// }elseif (is_scalar($thingValue)) {
	// 	echo "$thingValue is a scalar value."
	// }elseif (is_string($thingValue)) {
	// 	echo "$thingValue is a string."
	// }
};