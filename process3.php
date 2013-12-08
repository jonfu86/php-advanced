<?php
session_start();

$_SESSION['email'] = $_POST['email'];

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	header('Location: success.php');
	exit;
}
else
{
	header('Location: fail.php');
	exit;
}





// if(isset($_SESSION['email']))
// {
	// $_SESSION['email'] = $_POST['email'];

	
// }
// else
// {

	
// }
// else
// {
// 	$_SESSION['email'] = $_POST['email'];

// 	echo $_SESSION['email'];
// 	header('Location: success.php');
// 	exit;
// }



?>