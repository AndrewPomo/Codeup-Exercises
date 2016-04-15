<?php

$a = 0;

echo "Count by twos to 100!\n";

do {
	echo $a."\n";
	$a += 2;
} while ($a < 102);

echo "\nCount by -fives to -10!\n";

$b = 100;

do {
	echo $b."\n";
	$b -= 5;
} while ($b > -15);

echo "\nStarting with 2, square the result, but have no results greater than 1,000,000!\n";

$c = 2;

do {
	echo $c."\n";
	$c = $c*$c;
} while ($c < 100000000);