<?php

echo('<p align="right"><img src="img/relay_logo.gif" /></p>');
echo("<p><a href='list.php'>List of Students</a></p>");

$FirstName = $_GET['first'];
$LastName = $_GET['last'];
$SchoolName = $_GET['school'];
$Month= $_GET['month'];
$Year = $_GET['year'];

echo("<p>Thank you for submitting your information.</p>");

echo("<p>Name: " . $FirstName . ", " . substr($LastName,0,1) . ".</p>");

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$SchoolName = str_replace($vowels, "", $SchoolName);

echo("<p>School: " . $SchoolName . "</p>");

if ($Year >= 2010) {
	echo("Decade of graduation year: 2010s");
} elseif (($Year >= 2000) AND ($YEAR < 2010)) {
	echo("Decade of graduation year: 2000s");
} elseif (($Year >= 1990) AND ($YEAR < 2000)) {
	echo("Decade of graduation year: 1990s");
}

$diff = $Year - 1492;

$M = date('m',strtotime($Month));

//handles issue with february and leap years.
if (strtolower(trim($Month)) == "february") {
	$M = 2;
}
echo("<p>The number of years between 1492 and graduation year: " . $diff . "</p>");
echo("<p>The number of days in the graduation month: " . cal_days_in_month(CAL_GREGORIAN, $M, $Year) . "</p>");

?>