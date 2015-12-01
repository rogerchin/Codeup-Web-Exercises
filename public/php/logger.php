<?php

function logMessage($logLevel, $message)
{
	$todaysDate = date('Y-m-d');
	$todaysTime = date('H:i:s');
	$filename = "sites/codeup.dev/public/log/log-{todaysDate}.log";

    $handle = fopen($filename, 'a');
    $formattedMessage = "{$todaysDate} {$todaysTime} [{$logLevel}] {$message}";
    
}
$
function logInfo($message)
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("Error", $message);
}

logInfo("This is an info message");
logError("This is an error message.");

?>