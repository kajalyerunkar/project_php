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

		function get_password_userwise($email){

			return db_helper::select(
				"us_password","users","us_email='$email'");
		}
		function update_password($pass,$email){
			//update users set us_password ='$newpass' where us_email='$email'
			return $this->update("users","us_password='$pass'","us_email='$email'");
		}

		function check_brand_count($brname){

			//echo $email;
			//select count(*) from users where us_email="$email"
 
			return self::select(
			"count(*) as cnt","brands","br_name='$brname'"
		);

		}

		function brand_insert($name){
			// echo $name;
			return parent::insert(
				"brands",
				"br_name",
				"'$name'"
			);
		}
		function show_cart_records($pro){
			// echo $pro;
			// select *from products where pro_id= 6 or pro_id=5 or pro_id=4
			// select * from products where pro_id in(5,4,4)
			return $this->select("*","products","pro_id in($pro) order by pro_id desc");
		}

		function product_insert($rec){
			return parent::insert("products",
				"pro_name,pro_price,pro_discount,pro_caid,pro_brid,pro_description,pro_path","'$rec[0]','$rec[1]','$rec[2]','$rec[3]','$rec[4]','$rec[5]','$rec[6]'");
		}

	}

	$obj=new db_project();



	?>
