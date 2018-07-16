<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBars">

		<div id="nowPlayingLeft">
			
		</div>

		<div id="nowPlayingCenter">
			
		</div>

		<div id="nowPlayingLeft">
			
		</div>
			
		</div>
	</div>
	






</body>

</html>