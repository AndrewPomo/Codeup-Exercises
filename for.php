<?php 

do {
	fwrite(STDOUT, "\nHiya! Tell me how to count, and I'll do it! What number would you like me to start with?\n");
	$startNum = trim(fgets(STDIN));
	echo $startNum;
} while (!ctype_digit($startNum));
echo $startNum;

do {
fwrite(STDOUT, "\nAnd where would you like me to stop?\n");
$endNum = trim(fgets(STDIN));
} while (ctype_digit($endNum) == false);
echo $endNum;

do {
fwrite(STDOUT, "\nAnd finally, what would you like me to count by? (To count by ones enter '1', to count by fives enter '5'.)\n");
$increment = trim(fgets(STDIN));
echo $increment;

} while (ctype_digit($increment) == false);

if (ctype_digit($increment)) {
	$increment = $increment;
} else {
	$increment = 1;
}

for ($i=$startNum; $i < $endNum+1; $i+=$increment) { 
	echo "$i\n";
}