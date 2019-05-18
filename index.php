<?php include('includes/header.php') ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">
	<?php 
		$albumQuery = mysqli_query($con, "select * from Albums order by rand() limit 10");
		while($row = mysqli_fetch_array($albumQuery)) {
			echo '<div class="gridViewItem">
				<a href="album.php?id='. $row["id"] . '">
					<img src="' . $row["artworkPath"] . '" alt="">

					<div class="gridViewInfo">'
						. $row["title"] .
					'</div>
				</a>
			</div>';
		} 
	 ?>
</div>


<?php include('includes/footer.php') ?>