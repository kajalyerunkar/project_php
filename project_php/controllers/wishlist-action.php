<?php 
	
	require_once "../models/db_project.php";
	//print_r($_POST);
	$pid=$_POST['x'];
	//echo $pid;
	//print_r($_SESSION);
	if(!isset($_SESSION['project_uid'])){
		echo "please do login";
	}
	else {
		$uid = $_SESSION['project_uid'];
		//echo $uid;
		//check count of pro and user
		$total = $obj->check_count_wishlist($pid,$uid);
		//pre($total);
		//exit;
		if($total[0]['cnt']>0){
			echo "record exist in wishlist";
		}
		else{
			if($obj->wishlist_insert($pid,$uid)){
				echo "product added in wishlist";
			}
		}
	}
?>