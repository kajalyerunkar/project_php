<?php 
	//print_r($_POST);
	$productid=$_POST['x'];
	//echo $productid;


	if(!isset($_COOKIE["cookie_product_id"]))
	{
		//first cookie in cookie
		//echo 1;
		$newproduct=$productid;
		setcookie("cookie_product_id","$newproduct",time() +36000 ,"/");
	}
	else{
		//second onwards
		//echo 2;
		$getcookiedata=$_COOKIE['cookie_product_id'];

		$newproduct=$getcookiedata.",".$productid;
		//echo $newproduct;
		setcookie("cookie_product_id","$newproduct",time() + 36000, "/");
	}
	$ans= explode(",",$newproduct);
	//print_r($ans);
	$result=array_unique($ans);
	//print_r($result);
	echo count($result);
?>