<?php 
	session_start();
	if(!isset($_SESSION['project_usname'])){

		header("location:../views/index.php");

	}
	require_once "../models/db_project.php";

	//pre($_POST);
	if(!preg_match("/^(?=.*[a-z])(?=.*[A-z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/", $_POST['cpass'])){

		echo "current password";
	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/", $_POST['npass'])){

		echo "invalid new password";
	}

	else if($_POST['npass']!==$_POST['cnpass'])
	{
		echo "confirm password does not match";
	}
	elseif($_POST['npass']==$_POST['cpass']){
		//echo "ok";
		echo "new password should be different";
	}
	else{
			// echo "ok";
			//print_r($_SESSION);
			//echo $_SESSION['project_usemail'];
			$dbpass=$obj->get_password_userwise($_SESSION['project_usemail']);

			pre($dbpass);

			if(sha1($_POST['cpass'])== $dbpass[0]['us_password']){
				$newpass =sha1($_POST['npass']);

				$email=$_SESSION['project_usemail'];


				$fans=$obj->update_password($newpass,$email);
				//var_dump($fans);

					// Emails and sms
				$to="$email";

				$subject="changed password";
				$txt="your new password is:".$_POST.;
				$headers="from: <vishal@php_training.in>";

				$result=mail($to,$subject,$txt,$headers);
				var_dump($result);

			}
			else{
				echo "current password mismathch";
			}
		}





?>