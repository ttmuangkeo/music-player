<?php include('includes/header.php'); 

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];

} else {
	header('Location: index.php');
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
?>

<div class="entityInfo">
	<div class="leftSection">
		<img src="<?php echo $album->getArtworkPath() ?>" alt="">
	</div>

	<div class="rightSection">
		<h2><?php echo $album->getTitle(); ?></h2>
		<span>By: <?php echo $artist->getName(); ?></span>
		<p><?php echo $album->getNumberOfSong(); ?> Songs</p>
	</div>
</div>


<div class="tracklistContainer">
	<ul class="trackList">
		<?php 
		$songIdArray = $album->getSongId();
		$i = 1;
		foreach ($songIdArray as $songId) {
			$albumSong = new Song($con, $songId);
			$albumArtist = $albumSong->getArtist();

//remember to add more.png and white play btn later
			echo "<li class='tracklistRow'>
				<div class='trackCount'>
					<img class='play' src='assets/images/icons/play-white.png' alt=''>
					<span class='trackNumer'>$i</span>
				</div>
				<div class='trackInfo'>
					<span class='trackName'>" . $albumSong->getTitle() . "</span>
					<span class='artistName'>" . $albumArtist->getName() . "</span>
				</div>
				<div class='trackOptions'>
					<img class='optionsButton' src='assets/images/icons/more.png' alt=''>
				</div>
				<div class='trackOptions'>
					<span class='trackDuration'>" . $albumSong->getDuration() ."</span>
				</div>





			</li>";

			$i++;
		}
		 ?>
	</ul>
	
</div>

<?php include('includes/footer.php') ?>