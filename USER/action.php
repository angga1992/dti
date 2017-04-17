<?php
include "koneksi.php";
include "user.php";
	$action = strtolower($_POST["submit"]);
	$user = new user();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php`");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$user->insert_user();
				header("location:index.php");
			break;
			case "edit":
				$user->ubah_user();
				header("location:index.php");
			break;

	}


?>