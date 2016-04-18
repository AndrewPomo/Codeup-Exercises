<?php 

$bottleNum = 99;

do {
	do { 
		echo "$bottleNum bottles of beer on the wall, $bottleNum bottles of beer.\n";
		$bottleNum--;
		echo "Take one down, pass it around, $bottleNum bottles of beer on the wall.\n\n";
		
	} while ($bottleNum >2);
		echo "$bottleNum bottles of beer on the wall, $bottleNum bottles of beer.\n";
		$bottleNum--;
		echo "Take one down, pass it around, $bottleNum bottle of beer on the wall.\n\n";

		echo "$bottleNum bottle of beer on the wall, $bottleNum bottle of beer.\n";
		$bottleNum--;
		echo "Take one down, pass it around, no more bottles of beer on the wall.\n\n";

		echo "No more bottles of beer on the wall, no more bottles of beer.\n";
		$bottleNum += 99;
		echo "Go to the store, buy some more, $bottleNum bottles of beer on the wall.\n\n";
} while ($bottleNum >= 0);