<?php 
	// session_start();

	// if(!isset($_SESSION['project_name'])){
	// 	header("location:index.php");
	// }
	require_once "header.php";
?>
<div class="coontainer">
	<h2 class="text-center">wishlist</h2>
	<?php 

		$uid= $_SESSION['project_uid'];
		echo $uid;
		$result=$obj->show_wishlist_record($uid);
		pre($result);
	?>

</div>

<?php 

	require_once "footer.php";
?>