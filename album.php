<?php include('includes/header.php'); 

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];

} else {
	header('Location: index.php');
};

$albumQuery = mysqli_query($con, "select * from albums where id = '$albumId' ");
$album = mysqli_fetch_array($albumQuery);
echo $album['title'];

?>




<?php include('includes/footer.php') ?>