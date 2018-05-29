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
		//echo $uid;
		//print_r($_SESSION);
		$result=$obj->show_wishlist_record($uid);
		//pre($result);
		if(is_array($result)):
			foreach($result as $val):
	?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
							<img src="../assets/uploads/<?php echo $val['pro_path'];?>" alt=""/>
											<h2>
												<del><?php echo $val['pro_price'];?></del>
		<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?>

											</h2>
											<p><?php echo $val['pro_name'];?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>
												<del><?php echo $val['pro_price'];?></del>
		<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?>

											</h2>
											<p><?php echo $val['pro_name'];?></p>
	<a href="#" for="<?php echo $val['pro_id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#" for="<?php echo $val['pro_id'];?>" class="delete-to-wishlist"><i class="fa fa-plus-square"></i>delete</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php 
							endforeach;
						endif;
						?>
	

</div>

<?php 

	require_once "footer.php";
?>