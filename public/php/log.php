<?php

class Log
{

	public $filename = '';

	public function logMessage($logLevel, $message){

		$this->filename = 'log-' . date('Y-m-d') . '.log';

		$dateWithTime = date('Y-m-d H:i:s');

		$handle = fopen($this->filename, 'a');
		$formattedMessage = "$dateWithTime [{$logLevel}] {$message}";

		fwrite($handle, PHP_EOL . $formattedMessage . PHP_EOL);
    	fclose($handle);
	}

	public function logInfo($message){
		return $this->logMessage("INFO", $message);
	}

	public function logError($message){
		return $this->logMessage("ERROR", $message);
	}

}


?>

