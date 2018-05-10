<?php 
	require_once "header.php";
?>

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="../controllers/login-action.php">
							<input type="text" name="useremail" placeholder="enter emailid" />
							<input type="text" name="userpassword" placeholder="enter password" />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="../controllers/register-action.php">
							<input type="text" name="username" placeholder="enter name" />
							<input type="text" name="useremail" placeholder="enter emailid" />
							<input type="text" name="usernumber" placeholder="enter mobile number" />
							<input type="text" name="userpassword" placeholder="enter password" />
							<input type="text" name="usercpassword" placeholder="enter confirm password" />


							<button type="submit" class="btn btn-default">register</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php  
	require_once "footer.php";

?>