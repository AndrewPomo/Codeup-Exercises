<?php
function phoneDash($number)
{
	return substr($number, 0, 3) .'-'.substr($number, 3, 3) .'-'.substr($number, 6);
}

function parseContacts($filename)
{
    $contacts = array();
    $newContacts = array();
    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
	$contactFile = fread($handle, filesize($filename));
	$contacts = explode("\n", trim($contactFile));
	foreach ($contacts as $contact => $contactInfo) {
		$contactInfo = explode("|", $contactInfo);
		$contactInfo = [
			"name" => $contactInfo[0],
			"number" => phoneDash($contactInfo[1]),
		];
		array_push($newContacts, $contactInfo);
	}
    fclose($handle);
    return $newContacts;
}

print_r(parseContacts('contacts.txt'));