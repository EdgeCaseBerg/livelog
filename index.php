<?php
//Obtain pathing information:
require_once("config/config.php");

//this is the class to include and make instances of in the client file
include("tests/LiveLog.php");

$ll = new LiveLog("index.php", "5b2124dacd65996bddd0bb6b332b0258");

header('location:http://'.BASEDIR.'front_end/new_session.php');

?>
<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<title>This is title</title>
	</head>

	<body>
		<p>sooo you got here at least. now check <a href="http://<?php echo BASEDIR; ?>front_end/new_session.php">here</a></p>
	  <?php  
	  	$testVariable = "foo";
	  	//this calls the actual loggin function
	  	$ll->postToServer($testVariable)
	  ?>
	</body>
</html>