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
					<form id="update_form">
					
					<input type="text" name="cpass" placeholder="enter current password"/>	
					<input type="text" name="npass" placeholder="enter new password"/>
					<input type="text" name="cnpass" placeholder="enter confirm password"/>

					<button type="button" class="btn btn-default btn-update">update</button>
					<div class="msg_update"></div>
					</form>
				</div>
			</div>
		</div>

<?php 

	require_once "footer.php";
?>