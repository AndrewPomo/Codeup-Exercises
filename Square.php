<?php 

class Square extends Rectangle

{
	public function __construct($height)
		{
			parent::__construct($height, $height);
		}

	public function perimeter()
	{
		if ($this->height === $this->width) {
			return "A square whose sides are each " . $this->height . " units long has a perimeter of: " . $this->height * 4;
		} else {
			return "That's not a square. I am a useless function that can only calculate the perimeter of squares.";
		}
		
	}

	public function area()
	{
		return "A square with a height of " . $this->height . " and a width of ". $this->width . " has an area of: " . $this->height * $this->width;
	}
}

 ?>