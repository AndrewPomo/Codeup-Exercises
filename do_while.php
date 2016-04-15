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