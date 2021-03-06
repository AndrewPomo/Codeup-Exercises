<?php

// TODO: Create your inspect() function here
function inspect($var) 
{
	$varType = gettype($var);
	switch ($varType){
		case "NULL":
			$var = "NULL";
			break;
		case "boolean":
			if ($var == 1) {
				$var = "true";
			} else {
				$var = "false";
			}
			break;
		case "array":
			if (count($var) == 0) {
				$var = "an empty array";
			} else {
				$var = "an array";
			}
			break;
		case "string":
			if ($var == '') {
				$var = "empty";
			}
			break;
	}

	return "The $varType is $var.";
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1); 
echo PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2); 
echo PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3); 
echo PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4); 
echo PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null); 
echo PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1); 
echo PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2); 
echo PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1); 
echo PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2); 
echo PHP_EOL;
echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1); 
echo PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2); 
echo PHP_EOL;