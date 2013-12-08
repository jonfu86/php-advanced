<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP(advanced)Basic 3</title>
</head>
<body>
	<form action="process3.php" method="post">
		<label>
			<h1>Please enter your email address: </h1>
			<Input type="text" name="email">
			<input type="submit" value="Submit">
		</label>

</body>
</html>
<?php

session_unset($_SESSION);

?>