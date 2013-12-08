<?php
session_start();




if(isset($_POST['month']))
	{
	$_SESSION['month'] = $_POST['month'];
	if(in_array($_POST['month'], array('January', 'February', 'March')))
		{
			$_SESSION['quarter'] = '<h1>'.$_POST['month'].'</h1><p> Quarter: 1st</p>';
		}
	elseif(in_array($_POST['month'], array('April', 'May', 'June')))
		{
			$_SESSION['quarter'] ='<h1>'.$_POST['month'].'</h1><p> Quarter: 2nd</p>';
		}
	elseif(in_array($_POST['month'], array('July', 'August', 'September')))
		{
			$_SESSION['quarter'] = '<h1>'.$_POST['month'].'</h1><p> Quarter: 3rd</p>';
		}
	elseif(in_array($_POST['month'], array('October', 'November', 'December')))
		{
			$_SESSION['quarter'] = '<h1>'.$_POST['month'].'</h1><p> Quarter: 4th</p>';
		}

	if(in_array($_POST['month'], array('December', 'January', 'February')))
		{
			$_SESSION['season'] = '<p> Season: Winter </p>';
		}
	elseif(in_array($_POST['month'], array('March', 'April', 'May')))
		{
			$_SESSION['season'] ='<p> Season: Spring </p>';
		}
	elseif(in_array($_POST['month'], array('June', 'July', 'August')))
		{
			$_SESSION['season'] = '<p> Season: Summer</p>';
		}
	elseif(in_array($_POST['month'], array('September', 'October', 'November')))
		{
			$_SESSION['season'] = '<p>Season: Fall</p>';
		}	

	switch($_POST['month'])
		{
			case January:
				$_SESSION['stone'] = 'Garnet';
				break;
			case February:
				$_SESSION['stone'] = 'Amethyst';
				break;
			case March:
				$_SESSION['stone'] = 'Heliotrope';
				break;
			case April:
				$_SESSION['stone'] = 'Diamond';
				break;
			case May:
				$_SESSION['stone'] = 'Emerald';
				break;
			case June:
				$_SESSION['stone'] = 'Pearl';
				break;
			case July:
				$_SESSION['stone'] = 'Ruby';
				break;
			case August:
				$_SESSION['stone'] = 'Peridot';
				break;
			case September:
				$_SESSION['stone'] = 'Sapphire';
				break;
			case October:
				$_SESSION['stone'] = 'Opal';
				break;
			case November:
				$_SESSION['stone'] = 'Topaz';
				break;
			case December:
				$_SESSION['stone'] = 'Turquoise';
				break;
		}
	}

	
// 
// else
// 	{
// 	$_POST['month'] = $months[0];
// 	$_SESSION['month'] =  '<p> Quarter: 1st</p>';
// 	}

header('Location: php(advanced)basic.php');
exit;


// if(isset($_POST['action']) && $_POST['action'] == 'month')
// {
// 	foreach ($_POST as $name => $value)
// 	{
// 		if(empty($value))
// 		{
// 			$_SESSION['error'] [$name] = "sorry," .$name. "caused an error";
// 		}	
// 	}
// }



// echo "SERVER INFO<br>";
// var_dump($_SERVER);
// echo "REQUEST INFO<b>";
// var_dump($_REQUEST);
// echo "GET INFO:<br>";
// var_dump($_GET);
// echo "POST INFO:<br>";
// var_dump($_POST);

// echo "FILE INFO:<br>";
// var_dump($_FILES);


// echo "COOKIE INFO<br>";
// var_dump($_COOKIE);
// echo "SESSION INFO<br>";
// var_dump($_SESSION);

?>