<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="myStyle.css" />
		<title>Dynamic Website</title>
	</head>
	<body>
		<h1>This is a Dynamic website!</h1>
		<p id="myNum">0</p>
		<button type="button" id="myBtn">Click Me!</button>
		<h3>The result of retrieving data from the SSM Parameter store</h3>
		<?php 
		  	include 'get-params.php';
				echo "endPoint: ".$_SESSION['endPoint']."</br>";
				echo "userName: ".$_SESSION['userName']."</br>";
				echo "pwd: ".$_SESSION['pwd']."</br>";
				echo "dbName: ".$_SESSION['dbName']."</br>";
		?>
		<h3>Please select playlist!</h3>
		<form id="form" method="post" action="result.php">
			<select name="selectedPlaylist">
				<option value="playlist1">Playlist_1</option>
				<option value="playlist2">Playlist_2</option>
			</select>
			<input type="submit" value="Submit" />
		</form>

		<script src="myScript.js"></script>
	</body>
</html>
