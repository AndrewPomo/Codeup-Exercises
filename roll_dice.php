<?php

define('SIDES_OF_DICE', 500);

$roll = mt_rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}\nout of\n" . SIDES_OF_DICE . "\n";