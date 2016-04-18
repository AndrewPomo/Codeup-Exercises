<?php 

fwrite(STDOUT, "\nHiya! I am a silly counting computer. You tell me how to count, and I'll count it for you! What number would you like me to start with?\n");
$startNum = fgets(STDIN);

fwrite(STDOUT, "\nAnd where would you like me to stop?\n");
$endNum = fgets(STDIN);

for ($i=$startnum; $i < $endNum; $i++) { 
	echo "$i\n";
}