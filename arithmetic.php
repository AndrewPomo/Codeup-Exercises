<?php

$a = 50;
$b = 5;

function add($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "Error! Your inputs are not numeric!";
	} else {
		return $a + $b;
	}
}

function subtract($a, $b)
{
	$b = ($b*-1);
    return add($a, $b);
}

function multiply($a, $b)
{
    $c = ($a * ($b-1));
    $b = $c;
    return add($a, $b);
}

function divide($a, $b)
{
    $c = -($a * (($b-1)/$b));
    $b = $c;
    return add($a, $b);
}

function modulus($a, $b)
{

    return $a % $b;
}

echo "Add 50 & 5\n";
echo add($a, $b);
echo PHP_EOL;
echo "Subtract 5 from 50\n";
echo subtract($a, $b);
echo PHP_EOL;
echo "Multiply 5 by 50\n";
echo multiply($a, $b);
echo PHP_EOL;
echo "Divide 50 by 5\n";
echo divide($a, $b);
echo PHP_EOL;
echo "Find remainder of 50 divided by 5\n";
echo modulus($a, $b);
echo PHP_EOL;





