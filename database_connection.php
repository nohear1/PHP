<?php
require './app_config.php';

$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME)
	or die("<p>Error Connecting to Database: "
		.mysqli_error($link) ."</p>");

echo "<p>Connected to MySQL!!!</p>";

mysqli_select_db($link, DATABASE_NAME)
	or die("<p>Error Selecting the Database: "
		.DATABASE_NAME . mysqli_error($link) ."</p>");

echo "<p>Connected to MySQL, Using Database: " . DATABASE_NAME . ".</p>";
?>