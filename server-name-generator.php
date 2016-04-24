<?php

$adjectives = ['spherical', 'prickly', 'perpetual', 'swanky', 'unsightly', 'nonchalant', 'volatile', 'remarkable', 'nimble', 'sophisticated'];

$nouns = ['flamingo', 'macaroni', 'banjo', 'underclothes', 'ashtray', 'rhinoceros', 'soup', 'pagoda', 'pinecone', 'albatross'];

function randomWord($array)
{
	$randWord = $array[array_rand($array)];
	return $randWord;
}

function serverGen($array1, $array2)
{
	$word1 = randomWord($array1);
	$word2 = randomWord($array2);
	return "$word1-$word2";
}

echo serverGen($adjectives, $nouns);?>
