<?php include('includes/header.php') ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">
	<?php 
		$albumQuery = mysqli_query($con, "select * from Albums order by rand() limit 10");
		while($row = mysqli_fetch_array($albumQuery)) {
			echo '<div class="gridViewItem">

				<img class="img-responsive" src="' . $row["artworkPath"] . '" alt="">

				<div class="gridViewInfo">'
					. $row["title"];
				'</div>
			</div>';
		} 
	 ?>
</div>






<?php include('includes/footer.php') ?>