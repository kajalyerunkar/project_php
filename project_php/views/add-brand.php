<?php  
	
	session_start();
	if(!isset($_SESSION['project_usname'])){
		header("location:index.php");
	}
	require_once "header.php";
?>

		
		<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add Brand</h2>
						<form id="brand_form">
							<input type="text" name="br_name" placeholder="Nike" />
							
							<button type="button" class="btn btn-default btn-brand">Add</button>
							<div class="msg_brand"></div>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Show Brands</h2>
						<?php

						$result = $obj->show_brands();
						// pre($result);
						if(is_array($result)):

							foreach($result as $val):
						?>

						<li><?php echo $val['br_name']; ?></li>
						<?php 
						endforeach;
						endif;
						?>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php 

	require_once "footer.php";
?>