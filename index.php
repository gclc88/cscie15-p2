<!DOCTYPE HTML SYSTEM>
<html>

<head>
	<title>CSCIE-15 Project 2</title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='css/main.css' rel='stylesheet'>
	<?php require('pw-generator.php'); ?>
</head>


<body>
<H1> Password Generator </H1>
<div class="center">
<form action='index.php' method='POST'>
	Number of Characters: <input type='text' name='num' maxlength="1" size="1"> (3-9)
		<span class="errorMessage"> <?php echo "$errorMsg" ?> </span> <br>
	
	<input type="checkbox" name="addNumber" value="Yes" > Add Number <br>
	<input type="checkbox" name="addSymbol" value="Yes" > Add Symbol <br>
	<p><input type='submit' value='Submit'>
</form>
</div>

<p>
<div class="center output">
<p> Generated Password: 
	<div> <textarea rows="3" cols="50"> <?php echo "$password"; ?> </textarea>
	</div>
</div>	
</body>
</html>
