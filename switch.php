<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');


     

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	echo "It's Monday.\n";
     	break;
     case 2:
         // Output Tuesday
     echo "It's Tuesday.\n";
     	break;
     case 3:
         // Output Monday
     	echo "It's Wednesday.\n";
     	break;
     case 4:
         // Output Tuesday
     echo "It's Thursday.\n";
     	break;
     case 5:
         // Output Monday
     	echo "It's Friday.\n";
     	break;
     case 6:
         // Output Tuesday
     echo "It's Saturday.\n";
     	break;
     case 7:
         // Output Monday
     	echo "It's Sunday.\n";
     	break;
 }

 if($dayOfWeek == 1) {
     // Output Monday
 	echo "It's Monday.\n";
 }elseif($dayOfWeek == 2) {
     // Output Tuesday
 	echo "It's Tuesday.\n";
 }elseif($dayOfWeek == 3) {
     // Output Wednesday
 	echo "It's Wednesday.\n";
 }elseif($dayOfWeek == 4) {
     // Output Thursday
 	echo "It's Thursday.\n";
 }elseif($dayOfWeek == 5) {
     // Output Friday
 	echo "It's Friday.\n";
 }elseif($dayOfWeek == 6) {
     // Output Saturday
 	echo "It's Saturday.\n";
 }else {
     // Output Sunday
 	echo "It's Sunday.\n";
 }