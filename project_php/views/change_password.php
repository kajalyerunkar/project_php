<?php  
	
	session_start();
	if(!isset($_SESSION['project_usname'])){
		header("location:index.php");
	}
	require_once "header.php";
?>

		
		<div class="container">
			<div class="col-md-4 text-center">
				<div class="signup-form"><!--sign up form-->
					<h2>change password</h2>
					<form id="register_form">
					<!-- <input type="text" name="username" placeholder="enter name" /> -->
					<input type="text" name="useremail" placeholder="enter emailid"/>
					<!-- <input type="text" name="usernumber" placeholder="enter mobile number" /> -->
					<input type="text" name="userpassword" placeholder="enter new password" />
					<input type="text" name="usercpassword" placeholder="enter confirm new password" />


					<button type="button" class="btn btn-default btn-register">register</button>
					</form>
				</div>
			</div>
		</div>

<?php 

	require_once "footer.php";
?>