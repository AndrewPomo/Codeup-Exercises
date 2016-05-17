<?php 

class Rectangle
{
	public $height;
	public $width;
	public function __construct($height, $width)
		{
			$this->height = $height;
			$this->width = $width;
		}

	public function area()
	{
		return "A rectangle with a height of " . $this->height . " and a width of ". $this->width . " has an area of: " . $this->height * $this->width;
	}

	public function perimeter()
	{
		return "A rectangle with a height of " . $this->height . " and a width of ". $this->width . " has a perimeter of: "  . (($this->height * 2) + ($this->width * 2));
	}


}

 ?>


