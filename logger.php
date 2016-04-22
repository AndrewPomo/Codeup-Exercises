<?php

function logMessage($logLevel, $message)
{
    $currentDate = date('Y-m-d');
    $currentTime = time('H:M:S');
    $filename = "log-$currentDate.log";
	$handle = fopen($filename, 'a');
	fwrite($handle, "$currentDate $currentTime [$logLevel] $message\n");
	fclose($handle);
}

function logInfo($message)
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("ERROR", $message);
}

logInfo("If I slip, then I'm slippin'.");
logError("I'm slippin'.");
