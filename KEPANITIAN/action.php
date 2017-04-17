<?php
include "koneksi.php";
include "kepanitian.php";
	$action = strtolower($_POST["submit"]);
	$kepanitian = new kepanitian();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php`");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$kepanitian->insert_kepanitian();
				header("location:index.php");
			break;
			case "edit":
				$kepanitian->ubah_kepanitian();
				header("location:index.php");
			break;

	}


?>