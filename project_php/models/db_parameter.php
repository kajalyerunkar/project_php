<?php 
	 require_once "db_functions.php";
	 interface db_parameter{
	 	const HOSTNAME = "localhost";
	 	const  USER= "root";
	 	const  PASSWORD= "";
	 	const DATABASE = "eshopper_project";
	 }

	 interface db_general_function{

	function insert();
 	function update();
 	function delete();
 	function select($col,$tab,$condition);
	 
	 }
?>