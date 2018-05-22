<?php
	session_start();
	if(!isset($_SESSION['project_usname'])){

		header("location:../views/index.php");

	}
	require_once "../models/db_project.php";

	// pre($_POST);
	if(!preg_match("/^[A-Za-z0-9][A-Za-z0-9 ]+[A-Za-z0-9]$/", $_POST['br_name'])){

		echo "invalid Brand name";

	}
	else{
		$name = $_POST['br_name'];
		// echo $name;
		$result=$obj->check_brand_count($name);
		//pre($result);


		if($result[0]['cnt']>0){
			echo "Brand Already exist";
		}
		else{

			if($obj->brand_insert($name)){
				echo "Brand added";
			}
		}
	}
?>