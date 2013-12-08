<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success Page</title>
</head>
<body>

	<h1>Success</h1>
	<div>
		The email address you entered 
	<?=
		 $_SESSION['email'];
	?>
	 is a VALID email address! Thank you!
	</div>
</body>
</html>

<?php
session_unset($_SESSION);

?>