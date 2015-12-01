<?php


require_once "log.php";

$log = new Log();

$log->logInfo('User logged in successfutlly');
$log->logError('You do not have permission to view this file');
$log->logMessage('ERROR', '404 page not found');


?>
