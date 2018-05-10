<?php  

	require_once "db_helper.php";

	final class db_project extends db_helper{
		function show_brands(){
			//echo "hello";
			//select br_id,br_name from brands where 1
			return $this->select(
				"br_id,br_name","brands","1");
		}

		function show_category(){
			//echo "hello";
			//select br_id,br_name from brands where 1
			return $this->select(
				"ca_id,ca_name","categories","1");
	

		}
	

		function show_products(){

			return db_helper::select(
				"*","products","1 order by pro_id desc");
		}

		function show_categorywise_products($id){

			return db_helper::select(
			"*","products"," pro_caid='$id' order by pro_id desc");

		}

		function check_email_count($email){

			//echo $email;
			//select count(*) from users where us_email="$email"
 
			return self::select(
			"count(*) as cnt","users","us_email='$email'"
		);

		}

		function user_insert($name,$mobile,$email,$password){

			return parent::insert(
				"users",
				"us_name,us_mobile,us_email,us_password",
				"'$name','$mobile','$email','$password'"
			);
		}

		function get_user_data($email){
			//echo email;
			return db_helper::select(
		"*","users","us_email='$email'"
			);
		}

	}

	$obj=new db_project();



	?>
