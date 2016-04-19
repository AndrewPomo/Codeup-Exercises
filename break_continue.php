<?php
echo "first loop\n";
for ($i=0; $i <= 100; $i++) { 
	if ($i % 2 != 0){
		continue;
	} else {
		echo "$i\n";
	}
}

echo "next loop\n";

for ($i=0; $i <= 100; $i++) { 
	echo "$i\n";
	if ($i == 10){
		break;
	}
}