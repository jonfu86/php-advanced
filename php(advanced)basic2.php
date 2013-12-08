<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP (Advanced) basic 2</title>
	<style type="text/css">
		label{
			display:block;
		}
		.box{
			border:1px solid black;
			height:70px;
			width:600px;
			padding:20px;

		}
		.result_box{
			position:relative;
			top:-33px;
			left:25px;
			background:white;
			width:40px;
		}
	</style>
</head>
<body>
	<form action="process2.php" method='post'>
		<label>Enter a number: <Input type="text" name="number_1"></label>
		<label>Another number: <Input type="text" name="number_2"></label>
		<label>Series: <Input type="text" name="series"></label>
		<input type="submit" value="Run Fibonacci">
	</form>
	<br>
	<br>
	<div class= "box">	
		<div class= "result_box">Result</div>
	
	<?php	
	if(isset($_SESSION['result'])) 
	{
	echo implode(', ',($_SESSION['result']));
	}
	?>

		</div>
	</div>


	
</body>
</html>
<?php

session_unset($_SESSION);

?>