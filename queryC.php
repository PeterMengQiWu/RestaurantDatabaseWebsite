<!DOCTYPE HTML>
<html>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manager names with the date that the locations have opened of a restaurant location</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<body data-gr-c-s-loaded="true">
	<header id="main-header">
		<div class="container">
			<h1>Manager names with the date that the locations have opened of a restaurant location</h1>
		</div>
	</header>

	
	<?php
	// define variables and set to empty values
	include"connection.php";
	include"layout.php";
	$query = "SELECT DISTINCT type FROM restodb.restaurant";
	$res = pg_query($query) or die('Query failed: ' . pg_last_error());


	// create dropdown menu for user to choose restaurant
	echo '<div class="container myform"><div class="row"><div class="col-xs-12">';
	echo '<h3>Select Information Below:</h3>';
	echo '<form action="queryC_display.php" method="POST">';
	echo '<div class="form-group">';
	echo "<label>Select restaurant type to display information: </label>";
	echo '<select class="form-control" name="type">';
	while($row = pg_fetch_array($res)){
		$c_row = current($row);
		echo '<option value="'.$c_row.'">'.$c_row.'</option>';
	}

	echo "</select></div></div></div>";
	echo '<input type="submit">';
	echo "</form>";
	?>
</body>
</html>