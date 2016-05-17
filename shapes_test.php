<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

echo 'Some areas...'.PHP_EOL;
$rectangle1 = new Rectangle(4,3);
echo $rectangle1-> area() . PHP_EOL;
$rectangle2 = new Rectangle(5,3);
echo $rectangle2-> area() . PHP_EOL;
$rectangle3 = new Rectangle(6,3);
echo $rectangle3-> area() . PHP_EOL;
$rectangle4 = new Rectangle(7,3);
echo $rectangle4-> area() . PHP_EOL;
$rectangle5 = new Rectangle(8,3);
echo $rectangle5-> area() . PHP_EOL;
$square1 = new Square(3,3);
echo $square1-> area() . PHP_EOL;
$square2 = new Square(5,5);
echo $square2-> area() . PHP_EOL;
$square3 = new Square(6,6);
echo $square3-> area() . PHP_EOL;
$square4 = new Square(7,7);
echo $square4-> area() . PHP_EOL;
$square5 = new Square(8,8);
echo $square5-> area() . PHP_EOL;

echo '...and some perimeters.'.PHP_EOL;
$square1 = new Square(3,3);
echo $square1-> perimeter() . PHP_EOL;
$square2 = new Square(5,5);
echo $square2-> perimeter() . PHP_EOL;
$square3 = new Square(6,6);
echo $square3-> perimeter() . PHP_EOL;
$square4 = new Square(7,7);
echo $square4-> perimeter() . PHP_EOL;
$square5 = new Square(8,8);
echo $square5-> perimeter() . PHP_EOL;
echo $rectangle1-> perimeter() . PHP_EOL;
echo $rectangle2-> perimeter() . PHP_EOL;
echo $rectangle3-> perimeter() . PHP_EOL;
echo $rectangle4-> perimeter() . PHP_EOL;
echo $rectangle5-> perimeter() . PHP_EOL;


 ?>