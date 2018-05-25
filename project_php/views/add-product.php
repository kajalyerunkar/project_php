<?php 
	

	session_start();
	require_once "../models/db_project.php";
	require_once "header.php";
	if(!isset($_SESSION['project_usname'])){
		header("location:index.php");
	}

?>

	
			<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add product</h2>
						<form id="product_form">
							<input type="text" name="pro_name" placeholder="mens formal wear" /><br><br>
							<input type="text" name="pro_price" placeholder="2400" /><br><br>
							
							<input type="text" name="pro_discount" placeholder="20 in %" /><br><br>
							<select name="pro_caid">
								<option value="">please select categories</option>
								<?php 
								$res=$obj->show_category();
								pre($res);
								if(is_array($res)){
									foreach($res as $key=>$val){
										$id=$val['ca_id'];
										echo "<option value='$id'>".$val['ca_name']."</option>";
									}
								}

								?>
							</select><br><br>

							<select name="pro_brid">
								<option value="">please select brand</option>
								<?php 
								$res=$obj->show_brands();
								pre($res);
								if(is_array($res)){
									foreach($res as $key=>$val){
										$id=$val['br_id'];
										echo "<option value='$id'>".$val['br_name']."</option>";
									}
								}

								?>
							</select><br><br>

							<input type="file" name="pro_path" /><br><br>
							<textarea name="pro_desc" placeholder="product description"></textarea><br><br>


							<button type="button" class="btn btn-default btn-product">Add</button>
							<div class="msg_product"></div>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>
	<?php 
		require_once "footer.php";
	?>