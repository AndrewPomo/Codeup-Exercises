<?php

function add($a, $b)
{
	return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
}

echo "Add 50 & 5\n";
echo add(50, 5);
echo PHP_EOL;
echo "Subtract 5 from 50\n";
echo subtract(50, 5);
echo PHP_EOL;
echo "Multiply 5 by 50\n";
echo multiply(50, 5);
echo PHP_EOL;
echo "Divide 50 by 5\n";
echo divide(50, 5);
echo PHP_EOL;
echo "Find remainder of 50 divided by 5\n";
echo modulus(50, 5);
echo PHP_EOL;





