<?php
session_start();

if(isset($_POST['number_1']) && isset($_POST['number_2']) && isset($_POST['series']))
{
	$_SESSION['number_1'] = $_POST['number_1'];
	$_SESSION['number_2'] = $_POST['number_2'];
	$_SESSION['series'] = $_POST['series'];
	$_SESSION['result'] = array($_SESSION['number_1'], $_SESSION['number_2']);
	for ($i=1; $i < $_POST['series']-1; $i++) 
	{ 

		$_SESSION['sum'] = $_SESSION['number_1'] + $_SESSION['number_2'];

		$_SESSION['result'][] =$_SESSION['sum'];

		$_SESSION['number_1'] = $_SESSION['result'][$i];
		$_SESSION['number_2'] = $_SESSION['result'][$i+1];


	}

}


header('Location: php(advanced)basic2.php');
exit;

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