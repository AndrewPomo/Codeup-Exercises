<?php 

class Square extends Rectangle

{
	public function perimeter()
	{
		if ($this->height === $this->width) {
			return "A square whose sides are each " . $this->height . " units long has a perimeter of: " . $this->height * 4;
		} else {
			return "That's not a square. I am a useless function that can only calculate the perimeter of squares.";
		}
		
	}
}

 ?>