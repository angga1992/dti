<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "user.php";
	include "koneksi.php";
	
	$user = new user();
	$data_user = $user->get_user();
	
	include "view.index.php";
	//print_r($data_user);
?>