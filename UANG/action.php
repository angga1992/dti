<?php
include "koneksi.php";
include "uang.php";
	$action = strtolower($_POST["submit"]);
	$uang = new uang();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php`");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$uang->insert_uang();
				header("location:index.php");
			break;
			case "edit":
				$uang->ubah_uang();
				header("location:index.php");
			break;

	}


?>