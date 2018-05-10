<?php 
	
	require_once "../models/db_project.php";

	//pre($_POST);

	if(!preg_match("/^([A-Za-z0-9][a-zA-z0-9_\.]+[A-Za-z0-9])@([a-zA-z0-9][a-zA-z0-9\-]+[a-zA-z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail'])){

		echo "invalid emailid";

	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/", $_POST['userpassword'])){

		echo "invalid password";

	}
	else{
		//echo "ok";
		//auth emailid and password
		$result=$obj->get_user_data($_POST['useremail']);
			//pre($result);

			if(is_array($result)){

				$txtpass=sha1($_POST['userpassword']);
				//echo $txtpass;
				if($txtpass!=$result[0]['us_password']){
					echo "password does not match";
				}
				else{
					echo "ok";
				}

			}
			else{
				echo "email doesnt exists";
			}
		

	}

?>