<html>

<head>
	<title>CSCIE-15 Project 2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='css/main.css' rel='stylesheet'>
	<?php require('pw-generator.php'); ?>
</head>


<body>


<form action='index.php' method='POST'>
	Number of Characters in password: <input type='text' name='num' maxlength="1" size="1"> (3-9)
		<span class="errorMessage"> <?php echo "$errorMsg" ?> </span> <br>
	
	<input type="checkbox" name="addNumber" value="Yes" /> Add Number <br>
	<input type="checkbox" name="addSymbol" value="Yes" /> Add Symbol <br>
	<input type='submit' value='Submit'>
</form>

<p>
Generated Password: 
<textarea rows="2" cols="50"> <?php echo "$password"; ?>
</textarea>
</body>
</html>
