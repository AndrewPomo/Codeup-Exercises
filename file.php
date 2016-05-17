<?php 

class File 

{
	public $message;
	public $handle;

	public function __construct($filename = 'undefined.txt')
    {
		$this->handle = fopen($filename, 'a');
    }
	public function append($message)
	{
		fwrite($this->handle, "$message\n");
	}

	public function close()
    {
		fclose($this->handle);
    }
}

$file = new File('file.txt');
$file->append('Hello joshua!');
$file->close();
