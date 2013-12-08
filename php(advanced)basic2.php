<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP (Advanced) basic 2</title>
</head>
<body>
	<form action="process2.php" method='post'>
		<label>Enter a number: <Input type="text" name="number_1"></label>
		<label>Another number: <Input type="text" name="number_2"></label>
		<label>Series: <Input type="text" name="series"></label>
		<input type="submit" value="Run Fibonacci">
	</form>
	<div class='result_box'>
		<div>Result</div>
	<?php	
	if(isset($_SESSION['result'])) 
	{
	echo implode(', ',($_SESSION['result']));
	}
	?>

	</div>


	
</body>
</html>
<?php

session_unset($_SESSION);

?>