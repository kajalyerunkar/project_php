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
				$num=$_SESSION['project_usmobile'];

				$fans=$obj->update_password($newpass,$email);
				var_dump($fans);

					// Emails and sms
				$username = "$email";
				$hash = "11e852908ef60eb379610b50e75c0278711627db81a07aec83de6dfc47f4fc6e";
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = "TXTLCL"; // This is who the message appears to be from.
				$numbers = "$num"; // A single number or a comma-seperated list of numbers
				$message = urlencode("This is a test message from the PHP API script");
				
				$url ="http://api.textlocal.in/send/?username=$username&hash=$hash&message=$message&sender=$sender&numbers=$numbers&test=$test";
				echo $url;
				//file(pass url) execution process
				$result=file($url);
				var_dump($result);

			}
			else{
				echo "current password mismathch";
			}
		}





?>