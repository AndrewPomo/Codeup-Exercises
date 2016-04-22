<?php
function phoneDash($number)
{
	return substr($number, 0, 3) .'-'.substr($number, 3, 3) .'-'.substr($number, 6);
}

function fileToArray($filename)
{
    $handle = fopen($filename, 'r');
	$openFile = fread($handle, filesize($filename));
	$newArray = explode("\n", trim($openFile));
    fclose($handle);
	return $newArray;
}

function parseContacts($filename)
{
    $contacts = fileToArray($filename);
    $newContacts = array();
	foreach ($contacts as $contact => $contactInfo) {
		$contactInfo = explode("|", $contactInfo);
		$contactInfo = [
			"name" => $contactInfo[0],
			"number" => phoneDash($contactInfo[1]),
		];
		array_push($newContacts, $contactInfo);
	}
    return $newContacts;
}

print_r(parseContacts('contacts.txt'));