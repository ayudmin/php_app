<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">
	
	body {

	    display: grid;
	    place-items: center;
	    height: 100vh;
	    font-family: sans-serif;
	    margin: 0
	}

</style>
<body>

	<?php 

		$name = '"Dark Matter"';
		$read = false;

		if ($read){

			$message = "You have read $name.";
		} else {

			$message = "You have NOT read $name.";
		}

	 ?>

	<h1>

		<?= $message ?>

	</h1>

</body>
</html>