<?php include('includes/header.php'); 

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];

} else {
	header('Location: index.php');
};

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

		foreach ($songIdArray as $songId) {
			echo $songId . "<br>";
		}
		 ?>
	</ul>
	
</div>

<?php include('includes/footer.php') ?>