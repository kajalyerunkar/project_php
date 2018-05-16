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
			pre($_SESSION['project_usemail']);
			pre($dbpass);
			pre(sha1($_POST['cpass']));
			if(sha1($_POST['cpass'])== $dbpass[0]['us_password']){
				$newpass =sha1($_POST['npass']);

				$email=$_SESSION['project_usemail'];


				$fans=$obj->update_password($newpass,$email);
				var_dump($fans);
				pre($_SESSION['project_usmobile']);
				$num=$_SESSION['project_usmobile'];
					// Emails and sms
				
				$to = "$email";
				$subject = "My subject";
				$txt = "Hello world!";
				$headers = "From:vishal@php_training.in" . "\r\n" .
				"CC: somebodyelse@example.com";

				mail($to,$subject,$txt,$headers);


			// 	$username = "$email";
			// $hash = "a1f8778685ec454a322658a2b01781c5d727bda2a0bd8aef6cbd8fe6a2aad1dc";
			// //config variables. constant http://api.textlocal.in/docs for more info.

			// $test ="0";
			// $sender ="TXTLCL";
			// $numbers =$num;
			// $message = urlencode("hello this a test msg from php code");

			// $url ="http://api.textlocal.in/send/?username=$username&hash=$hash&message=$message&sender=$sender&numbers=$numbers&test=$test";
			// echo $url;
			// //file(pass url) execution process
			// $result=file($url);
			// var_dump($result); 

			}
			else{
				echo "current password mismathch";
			}
		}





?>