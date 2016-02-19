<?php

$dictionary = array("Horse", "Cat", "Dog", "Fish", "Winter", "Spring", "Summer", "Fall", "Funny", "Stupid", "Cute", "Snow", "Up", "Bottom", "Sun", "Beach", "Apple", "Android", "Windows", "Ouch");
					
# var_dump($_GET);
	
$symbols = array("!", "@", "#", "$", "%", "^", "&", "*");

$wordSize = sizeof($dictionary);
$symbolSize = sizeof($symbols);
$errorMsg = "";		# error message is empty string if no error
$password = "";		# returned password used in display page

$pwLength = 0;		# default to 5 words	

# input validation, input parameter must be numeric and between 3 to 9
# If input formation is invalid set $errorMsg accordingly
if (isset($_POST['num'])) {
	if (is_numeric($_POST['num'])) {
		# variable contains numeric value
		if ($_POST['num'] < 3 || $_POST['num']> 9) {
			# add error message if value is not between 3 - 9
			$errorMsg = "Must be between 3 and 9";
		}
		else 
			$pwLength = $_POST['num'];
	}
	else {
		# input is not numeric, add error message
		$errorMsg = "Entry must be a number";
	}
}

# Get random words from array
for ($x = 0; $x < $pwLength; $x++ ) {
	$index = rand(0, $wordSize-1);
	$password .= $dictionary[$index];
}

# if password has been generated, check if user wants to add number or symbols
if ($password != null) {
	if(isset($_POST['addNumber']) && $_POST['addNumber'] == 'Yes')  {
		# add a random number between 1 and 100 to password
		$randomNumber = rand(1, 100);
		$password .= $randomNumber;
	}

	if(isset($_POST['addSymbol']) && $_POST['addSymbol'] == 'Yes')  {
		# add symbol selected from array to password
		$index = rand(0, $symbolSize - 1);
		$password .= $symbols[$index];
	}
}
?>