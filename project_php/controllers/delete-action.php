<?php 
	
	//print_r($_POST);
	$proid=$_POST['x'];
	//echo $proid;

	$cartdata = $_COOKIE['cookie_product_id'];
	//echo $cartdata;
	//1,2,3
	$arr=explode(",",$cartdata);
	//print_r($arr);

	foreach ($arr as $key => $val) {
		//echo $val;
		//echo $key;
		if($val==$proid){
			//echo $key;
			unset($arr[$key]);
		}
		
	}
	//print_r($arr);
	//arr(5,6);
	$newproduct=implode(",",$arr);
	//echo $newpro;

	setcookie("cookie_product_id",$newproduct,time() + 3600,"/");

	$ans=explode(",",$newproduct);
	//print_r($ans);
	$result=array_unique($ans);
	//print_r($result);
	echo count($result);


?>