<?php
session_start();
// unset($_SESSION);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP(advanced) Basic</title>
</head>
<body>
	<form action="process.php" method="post">
	<input type="hidden" name="action" value="month">
	<label for="month">Choose a month: </label>
	<select name ="month">
	<?php

	$months = array();
	$currentMonth = (int)date('m');

	for($x = $currentMonth; $x < $currentMonth+12; $x++) {
	    $months[] = date('F', mktime(0, 0, 0, $x, 1));
	}
	foreach($months as $month){
	  echo '<option value="'.$month.'">'.$month.'</option>';
	}

	?>
	</select>
	<div>
		<input class="enter" type="submit" value="Enter">
	</div>
	<div class= "result_box">Result</div>
	<div>
	<?php
	
	if(isset($_SESSION['month']))
	{
		if(isset($_SESSION['quarter']))
		{
			echo $_SESSION['quarter'];
		}
		if(isset($_SESSION['season']))
		{
			echo $_SESSION['season'];
		}
		if(isset($_SESSION['stone']))
			echo 'Birthstone: '.$_SESSION['stone'];
	}
	
			

	?>
	
	</div>
</body>
</html>
<?php
//to unset a variable from the session
session_unset($_SESSION);

//or to unset all variables from the session, set $_SESSION as an empty array.
// $_SESSION = array(); 

?>