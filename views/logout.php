<?php  
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['project_uid']);
	unset($_SESSION['project_usname']);
	unset($_SESSION['project_usemail']);
	unset($_SESSION['project_usmobile']);
	session_destroy();
	header("location:login.php");

?>