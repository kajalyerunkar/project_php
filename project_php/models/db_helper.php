<?php  

 require_once "db_connect.php";

 abstract class db_helper extends db_connect implements db_general_function{


 	function insert(){}
 	function update(){}
 	function delete(){}
 	function select($col,$tab,$condition){
 		//echo "selete call";
 		 $sql="select $col from $tab where $condition";
 		// echo "$sql";
 		 //print_r($this->conn);
 		 $result =$this->conn->query($sql) or die($this->$conn->error);
 		 // echo "<pre>";
 		 // print_r($result);
 		 // echo "</pre>";

 		 if($result->num_rows>0){
 		 	while($ans=$result->fetch_array(MYSQLI_ASSOC)){
 		 		// echo "<pre>";
 		 		// print_r($ans);
 		 		// echo "</pre>";


 				 $data[]=$ans;
 		 	}
 		 		// echo "<pre>";
 		 		// print_r($data);
 		 		// echo "</pre>";
 		 		return $data;

 		 }
 		 else{

 		 	return 0;
 		 }
 	}

 }


?>