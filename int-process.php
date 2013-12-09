<?php
session_start();


$_SESSION['building'] = $_POST['building'];

if(isset($_POST['restart']))
{
	session_destroy();


}



switch($_POST['building'])
{
	case 'farm':
	$_SESSION['gold'] = rand(10,20);
	break;

	case 'cave':
	$_SESSION['gold'] = rand(5,10);
	break;

	case 'house':
	$_SESSION['gold'] = rand(2,5);
	break;

	case 'casino':
	$_SESSION['gold'] = rand(-50,50);
	break;
}

if(isset($_SESSION['total']))
{
$_SESSION['total'] = $_SESSION['total'] + $_SESSION['gold'];
}
else
{
$_SESSION['total'] = $_SESSION['gold'];
}

date_default_timezone_set('America/Los_Angeles');

$time = date("F d, Y g:i a", time());

if($_POST['building'] == 'casino')
{
	if($_SESSION['gold'] >= 0)
	{
		$activity = '<div class ="green"> You entered a '.$_POST['building'].' and earned '.$_SESSION['gold']. ' gold.  (' .$time. ') </div>';
	}
	else
	{
		$activity = '<div class ="red"> You entered a '.$_POST['building'].' and earned '.$_SESSION['gold']. ' gold.  (' .$time. ') </div>';
	}
}

else
{
	$activity = '<div> You entered a '.$_POST['building'].' and earned '.$_SESSION['gold']. ' gold.  (' .$time. ') </div>';
}

if(isset($_SESSION['feed']))
{
	$_SESSION['feed'][] = $activity;
}
else
{
	$old = $activity;
	$_SESSION['feed'] = array($old);
} 

// var_dump($_SESSION['feed']);

header('Location: php(advanced)intermediate.php');
exit;

// echo $activity;


// echo $_SESSION['gold'];
// echo $_SESSION['total'];


echo "SERVER INFO<br>";
var_dump($_SERVER);
echo "REQUEST INFO<b>";
var_dump($_REQUEST);
echo "GET INFO:<br>";
var_dump($_GET);
echo "POST INFO:<br>";
var_dump($_POST);

echo "FILE INFO:<br>";
var_dump($_FILES);


echo "COOKIE INFO<br>";
var_dump($_COOKIE);
echo "SESSION INFO<br>";
var_dump($_SESSION);


?>