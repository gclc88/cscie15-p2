<?php

$dictionary = array("Horse", "Cat", "Dog", "Fish", "Winter", "Spring", "Summer", "Fall", "Funny", "Stupid", "Cute", "Snow", "Up", "Bottom", "Sun", "Beach", "Apple", "Android", "Windows", "Ouch");
					
# var_dump($_GET);
	
$symbols = array("!", "@", "#", "$", "%", "^", "&", "*");

$wordSize = sizeof($dictionary);
$symbolSize = sizeof($symbols);
$errorMsg = "";
$password = "";

$pwLength = 0;		# default to 5 words	

if (isset($_POST['num'])) {
	if (is_numeric($_POST['num'])) {
		if ($_POST['num'] < 3 || $_POST['num']> 9) {
			$errorMsg = "Must be between 3 and 9";
		}
		else		
			$pwLength = $_POST['num'];
	}
	else
		$errorMsg = "Entry must be a number";
}
 
echo "wordSize is $wordSize <br>";
echo "pwLength is $pwLength <br>";


for ($x = 0; $x < $pwLength; $x++ ) {
	$index = rand(0, $wordSize-1);
	$password .= $dictionary[$index];
}

if ($password != null) {
	if(isset($_POST['addNumber']) && $_POST['addNumber'] == 'Yes')  {
		$randomNumber = rand(1, 100);
		$password .= $randomNumber;
	}

	if(isset($_POST['addSymbol']) && $_POST['addSymbol'] == 'Yes')  {
		$index = rand(0, $symbolSize - 1);
		$password .= $symbols[$index];
	}
}
?>