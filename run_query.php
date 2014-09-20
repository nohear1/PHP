<?php
	// require './app_config.php';

	// mysqli_connect(DATABASE_HOST, DATABASE_USERNAME)
	// 	or die("<p>Error connecting to the database: " . mysqli_error() . "</p>");

	// echo "<p>Connected to MySQL!!!</p>";

	// mysqli_select_db(DATABASE_NAME)
	// 	or die("<p>Error selecting the database " . DATABASE_NAME . mysqli_error() . "</p>");

	// echo "<p>Connected to MySQL, using database: " . DATABASE_NAME . "</p>";

// require './database_connection.php';

// $query_text = $_REQUEST['query'];
// $result = mysqli_query($link, $query_text);

// if (!$result) {
// 	die("<p>Error in executing the SQL query "
// 	. $query_text . ": " . mysqli_error($link) . "</p>");
// }

// echo "<p>Results from your query:</p>";
// echo "<ul>";
// while ($row = mysqli_fetch_row($result)) {
// 	echo "<li>{$row[0]}</li>";
// }
// echo "</ul>";

// $return_rows = true;
// $uppercase_query_text = trim(strtoupper($query_text));

// if (preg_match("/CREATE|INSERT|UPDATE|DELETE|DROP/", $uppercase_query_text)) {
// 	$return_rows = false;
// }

// $return_rows = false;
// $uppercase_query_text = trim(strtoupper($query_text));
// $location = strpos($uppercase_query_text, "CREATE");
// if ($location === false || $location > 0) {
// 	$location = strpos($uppercase_query_text, "INSERT");
// 	if ($location === false || $location > 0) {
// 		$location = strpos($uppercase_query_text, "UPDATE");
// 		if ($location === false || $location > 0) {
// 			$location = strpos($uppercase_query_text, "DELETE");
// 			if ($location === false || $location > 0) {
// 				$location = strpos($uppercase_query_text, "DROP");
// 				if ($location === false || $location > 0) {
// 					$return_rows = true;
// 				}
// 			}
// 		}
// 	}
// }

require './database_connection.php';

$query_text = $_REQUEST['query'];
$result = mysqli_query($link, $query_text);

if (!$result) {
	die("<p>Error in executing the SQL query "
	. $query_text . ": " . mysqli_error($link) . "</p>");
}

$return_rows = true;

if (preg_match("/^\s*(CREATE|INSERT|UPDATE|DELETE|DROP)/i", $query_text)) {
	$return_rows = false;
}

if ($return_rows) {
	echo "<p>Results from your query: </p>";
	echo "<ul>";
	while ($row = mysqli_fetch_row($result)) {
		echo "<li>{$row[0]}</li>";
	}
	echo "</ul>";
} else {
		echo "<p>Your query was processed successfully!</p>";
		echo "<p>{$query_text}</p>";
	
}

?>