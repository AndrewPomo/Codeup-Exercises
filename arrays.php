<?php 

$firstArray = array(
	1,
	2,
	3,
	4,
	5
 );
print_r($firstArray);

$secondArray = [
	1,
	2,
	3,
	4,
	5
];
print_r($secondArray);

echo $firstArray[3] . PHP_EOL;
echo $secondArray[3] . PHP_EOL;

$person1 = [
		'first_name' => 'Timothy',
		'middle_name' => 'Andrew',
		'last_name' => 'Duncan',
		'email' => 'slam.duncan@sbcglobal.net',
		'phone' => '210-477-8774'
	];

$test = [

	'person1' => $person1,
	'person2' => [
		'first_name' => 'Kawhi',
		'middle_name' => '',
		'last_name' => 'Leonard',
		'email' => 'fear_the_claw@gmail.com',
		'phone' => '210-536-6273'
	],

	'person3' => [
		'first_name' => 'Lamarcus',
		'middle_name' => '',
		'last_name' => 'Aldridge',
		'email' => 'lamarcus@trailblazers.com',
		'phone' => '210-867-5309'
	],
];

echo $test['person1']['first_name'].' '.$test['person1']['middle_name'].' '.$test['person1']['last_name'].PHP_EOL;
echo $test['person2']['first_name'].' '.$test['person2']['middle_name'].' '.$test['person2']['last_name'].PHP_EOL;
echo $test['person3']['first_name'].' '.$test['person3']['middle_name'].' '.$test['person3']['last_name'].PHP_EOL;