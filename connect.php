<?php
	require './app_config.php';
	$link = mysqli_connect($database_host, $username)
		or die("<p>Error Connecting to Database: " .
			mysqli_error($link) . "</p>");

	echo "<p>Connected to MySQL!</p>";

	mysqli_select_db($link, $database_name)
		or die("<p>Error Selecting Database: test" . mysqli_error($link) . "</p>");

	echo "<p>Connected to MySQL, using database test.</p>";

	$result = mysqli_query($link, "SHOW TABLES;");
	if(!$result) {
		die("<p>Error in Listing Tables: " . mysqli_error($link) . "</p>");
	}

	echo "<p>Tables in database: </p>";
	echo "<ul>";
	while ($row = mysqli_fetch_row($result)) {
		echo "<li>Table: {$row[0]}</li>";
	}
	echo "</ul>";

?>