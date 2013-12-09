<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP(advanced) Intermediate</title>
	<style type="text/css">
		.gold{
			width:700px;
			height:50px;
			/*border:solid 1px black;*/
			padding:20px;
			display:inline-block;
		}
		.gold p{
			width:80px;
			float:left;
			display:inline-block;
			margin:0px;
		}
		.result{
			display:inline-block;
			float:left;
			border:solid 1px;
			padding:8px;
			width:80px;
			height:20px;
		}
		form{
			width:200px;
			height:180px;
			display:inline-block;
			border:solid 1px;
			margin: 0px 20px;
			padding: 20px;
		}
		.bottom{
			margin:20px;

		}
		.bottom p{
			font-weight: bolder;
			font-size:18px;
		}
		.activity{
			height:300px;
			width:900px;
			border:1px solid;
			overflow:auto;
			padding:10px;
		}
		.red{
			color:red;
		}
		.green{
			color:green;
		}
		.restart form{
			border:none;
			float:left;
			display:inline-block;
			height:40px;
			width:80px;
			padding:0px;
		}
	</style>

</head>
<body>
	<div class='gold'>
		<p>Your Gold: </p>
		<div class='result'>
			<?php
				if(isset($_SESSION['total']))
				{
				echo $_SESSION['total'];
				}
			?>
		</div>
		<div class = "restart">
		<form action="int-process.php" method="post">
			<input type="hidden" name="restart" value="restart">
			<input type="submit" value="Start Over">
		</form>
		</div>
	</div>
	<br>

	


	<form action="int-process.php" method="post">
		<label> <h2>Farm</h2> <p>(earns 10-20 gold)</p></label>
		<input type="hidden" name="building" value="farm">
		<input type="submit" value="Find Gold!">
	</form>
	<form action="int-process.php" method="post">
		<label> <h2> Cave</h2> <p> (earns 5-10 gold)</p></label>
		<input type="hidden" name="building" value="cave">
		<input type="submit" value="Find Gold!">
	</form>
	<form action="int-process.php" method="post">
		<label> <h2> House </h2><p> (earns 2-5 gold)</p></label>
		<input type="hidden" name="building" value="house">
		<input type="submit" value="Find Gold!">
	</form>
	<form action="int-process.php" method="post">
		<label> <h2>Casino </h2> <p>(earns/loses 0-50 gold)</p></label>
		<input type="hidden" name="building" value="casino">
		<input type="submit" value="Find Gold!">
	</form>
	<br>
	<div class='bottom'>
		<p>Activities: </p>
		<div class="activity">
		
		<?php
			if(isset($_SESSION['feed'])) 
			{
				$feed = array_reverse($_SESSION['feed']);

				echo implode(' ', $feed);
			}
		?>
		</div>
	</div>
	
</body>
</html>
<?php
// session_unset($_SESSION);
?>