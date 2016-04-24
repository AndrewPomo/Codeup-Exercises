<?php

$adjectives = ['spherical', 'prickly', 'perpetual', 'swanky', 'unsightly', 'nonchalant', 'volatile', 'remarkable', 'nimble', 'sophisticated'];

$nouns = ['flamingo', 'macaroni', 'banjo', 'underclothes', 'ashtray', 'rhinoceros', 'soup', 'pagoda', 'pinecone', 'albatross'];

function randomWord($array)
{
	$randIndex = mt_rand(0, (count($array)-1));
	return $array[$randIndex];
}

function serverGen($array1, $array2)
{
	$word1 = randomWord($array1);
	$word2 = randomWord($array2);
	return "$word1-$word2";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
	<h1>Welcome to RandomServerGenerator.com!</h1>
	<p>Your random server name is:</p>
	<h2><<?php echo serverGen($adjectives, $nouns);?></h2>
</body>
</html>