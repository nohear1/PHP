<?php

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$facebook_url = str_replace("facebook.org", "facebook.com", trim($_REQUEST['facebook_url']));
$position = strpos($facebook_url, "facebook.com");
if ($position === false) {
	$facebook_url = "http://www.facebook.com/".$facebook_url;
}
$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
	$twitter_url = $twitter_url.$twitter_handle;
} else {
	$twitter_url = $twitter_url.substr($twitter_handle, $position + 1);
}

?>

<html>

<head>
	<link href="./css/phpMM.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="header"><h1>PHP & MySQL: The Missing Manual</h1>
	</div>

	<div id="example">Example 3-1</div>

	<div id="content">
		<p>Here's a record of what information you submitted:</p>
		<p>
			Name: <?php echo $first_name." ".$last_name; ?><br />
			E-Mail Address: <?php echo $email; ?><br />
			<a href="<?php echo $facebook_url; ?>">Your Facebook Page</a> <br />
			<a href="<?php echo $twitter_url; ?>">Check Out Your Twitter Feed</a><br />
		</p>

		<p>Here's a record of what information you submitted:</p>
		<?php
			foreach($_REQUEST as $value) {
				echo "<p>" . $value . "</p>";
			}
		?>

		<p>Here's a record of everything in the $_REQUEST array:</p>
		  <?php
		    foreach($_REQUEST as $key => $value) {
		      echo "<p>For " . $key . ", the value is '" . $value . "
		'.</p>";
		    }
		  ?>

	</div>

	<div id="footer"></div>

</body>

</html>