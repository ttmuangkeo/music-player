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
			<div class="content playerControls">
				
				<div class="buttons">
					<button class="controlButton shuffle" title="shuffle button">
					<img src="assets/images/icons/shuffle.png" alt="shuffle">
					</button>

					<button class="controlButton prev" title="prev button">
					<img src="assets/images/icons/prev.png" alt="prev">
					</button>

					<button class="controlButton play" title="play button">
					<img src="assets/images/icons/play.png" alt="play">
					</button>

					<button class="controlButton pause" title="pause button" style="display:none;">
					<img src="assets/images/icons/pause.png" alt="pause">
					</button>

					<button class="controlButton next" title="next button">
					<img src="assets/images/icons/next.png" alt="next">
					</button>

					<button class="controlButton repeat" title="repeat button">
					<img src="assets/images/icons/repeat.png" alt="repeat">
					</button>

				</div>

			</div>
			
		</div>

		<div id="nowPlayingLeft">
			
		</div>
			
		</div>
	</div>
	






</body>

</html>