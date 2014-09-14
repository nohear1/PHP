<?php
	$link = mysqli_connect("localhost",
					"-u root")
		or die("<p>Error Connecting to Database: " .
			mysql_error() . "</p>");

	echo "<p>Connected to MySQL!</p>";

	mysqli_select_db($link, "test")
		or die("<p>Error Selecting Database: test" . mysql_error() . "</p>");

	echo "<p>Connected to MySQL, using database test.</p>";

?>