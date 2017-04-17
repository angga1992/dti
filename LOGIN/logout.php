<?php
	
	session_start();
	
	$logout = strtolower($_POST["submit"]);
	
	if($logout='logout'){
		
		$_SESSION = array();
		header("location:index.php");
		
	
	}

?>