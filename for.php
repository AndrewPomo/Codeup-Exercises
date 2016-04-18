<?php 

fwrite(STDOUT, "\nHiya! I am a silly counting computer. You tell me how to count, and I'll count it for you! What number would you like me to start with?\n");
$startNum = fgets(STDIN);

fwrite(STDOUT, "\nAnd where would you like me to stop?\n");
$endNum = fgets(STDIN);

fwrite(STDOUT, "\nAnd finally, what would you like me to count by? (To count by ones enter '1', to count by fives enter '5'.)\n");
$increment = fgets(STDIN);
echo $increment;

if (ctype_digit($increment)) {
	return;
} else {
	$increment = 1;
}

for ($i=$startNum; $i < $endNum+1; $i+=$increment) { 
	echo "$i\n";
}