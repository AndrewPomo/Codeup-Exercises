<?php

$a = 50;
$b = 0;

function throwErrorMessage ($a, $b)
{
	if ($b == 'div0'){
		return "You can't divide by zero, fool.";
	} else {
		return "Your current inputs are $a and $b. This program wont work unless both inputs are numbers. Enter numbers.";
	}
}

function add($a, $b, $c = null)
{
	if (!is_numeric($a) || !is_numeric($b)) {
		return throwErrorMessage($a, $b);
	} else {
		return $a + $c;
	}
}

function subtract($a, $b)
{
	$c = ($b*-1);
    return add($a, $b, $c);
}

function multiply($a, $b)
{
    $c = ($a * ($b-1));
    return add($a, $b, $c);
}

function divide($a, $b)
{	
	if ($b == 0) {
		return throwErrorMessage(null, 'div0');
	} elseif ($b = 1){
		$c = 0;
		return add($a, $b, $c);
	} else {
		$c = -($a * (($b-1)/$b));
		return add($a, $b, $c);
	}
}

function modulus($a, $b)
{	if ($b == 0) {
		return throwErrorMessage(null, 'div0');
	} else{
		$d = $a % $b;
	    $c = $d - $a;
	    return add($a, $b, $c);
	}
}
echo "$a + $b = ". add($a, $b);
echo PHP_EOL;
echo "$a - $b = ". subtract($a, $b);
echo PHP_EOL;
echo "$a x $b = ". multiply($a, $b);
echo PHP_EOL;
echo "$a / $b = ". divide($a, $b);
echo PHP_EOL;
echo "The remainder of $a / $b = ". modulus($a, $b);
echo PHP_EOL;





