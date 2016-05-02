<?php 
require_once 'log.php';

$newLog = new Log();
$newLog->currentTime = date('H:i:s');
$newLog->currentDate = date('Y-m-d');
$newLog->filename = "log-$newLog->currentDate.log";
$newLog->info("If I slip, then I'm slippin'.");
$newLog->error("I'm slippin'.");

