<?php 
	require_once 'db_parameter.php';


	abstract class db_connect implements db_parameter{
		protected $conn="";
		function __construct(){
			//self::HOSTNAME,echo "	connection";
			//mysqli_connect()
			$this->conn = new mysqli(self::HOSTNAME,self::USER,self::PASSWORD,self::DATABASE);

			// echo "<pre>";
			// print_r($this);
			// echo "</pre>";
		}

		function __destruct(){
			//echo "disconnect";
			$result=$this->conn->close();
			//var_dump($result);
		}
	}


?>