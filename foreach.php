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

echo "\n First loop \n";

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
	}elseif (is_string($thingValue)) {
		echo "Thing number $thingNum is a string.\n";
		$thingNum++;
	}
};

echo "\n Second loop \n";

$thingNum = 1;
foreach ($things as $thingValue) {
	if (is_scalar($thingValue)) {
		if (is_bool($thingValue)) {
			echo "Thing number $thingNum is a boolean. Its value is $thingValue.\n";
			$thingNum++;
		}elseif (is_float($thingValue)) {
			echo "Thing number $thingNum is a floating point number. Its value is $thingValue.\n";
			$thingNum++;
		}elseif (is_int($thingValue)) {
			echo "$thingNum is an integer. Its value is $thingValue.\n";
			$thingNum++;
		}elseif (is_null($thingValue)) {
			echo "Thing number $thingNum is nothing. Its value is $thingValue.\n";
			$thingNum++;
		}elseif (is_string($thingValue)) {
			echo "Thing number $thingNum is a string. Its value is $thingValue.\n";
			$thingNum++;
		}
	} else {
		echo "$thingNum is not scalar, so its value doesn't matter.\n";
		$thingNum++;
	}
};

echo "\n Third loop \n";

$thingNum = 1;
foreach ($things as $thingValue) {
	if (is_array($thingValue)) {
		echo "Thing number $thingNum is an array. It's values are: \n";
		for ($i=0; $i < count($thingValue); $i++) { 
			echo "$thingValue[$i]\n";
		}
		$thingNum++;
	} elseif (is_bool($thingValue)) {
		echo "Thing number $thingNum is a boolean. Its value is $thingValue.\n";
		$thingNum++;
	}elseif (is_float($thingValue)) {
		echo "Thing number $thingNum is a floating point number. Its value is $thingValue.\n";
		$thingNum++;
	}elseif (is_int($thingValue)) {
		echo "$thingValue is an integer. Its value is $thingValue.\n";
		$thingNum++;
	}elseif (is_null($thingValue)) {
		echo "Thing number $thingNum is nothing. Its value is $thingValue.\n";
		$thingNum++;
	}elseif (is_numeric($thingValue)) {
		echo "Thing number $thingNum is a numeric value. Its value is $thingValue.\n";
		$thingNum++;
	}elseif (is_string($thingValue)) {
		echo "Thing number $thingNum is a string. Its value is $thingValue.\n";
		$thingNum++;
	}
};

