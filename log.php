<?php 

class Log

{
	public $filename;
	public $currentTime;
	public $currentDate;
	public function logMessage($logLevel, $message)
	{
		$handle = fopen($this->filename, 'a');
		fwrite($handle, "$this->currentDate $this->currentTime [$logLevel] $message\n");
		fclose($handle);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}
}

 ?>