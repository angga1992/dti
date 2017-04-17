<?php
include "koneksi.php";
include "amanah.php";
	$action = strtolower($_POST["submit"]);
	$amanah = new amanah();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$amanah->insert_amanah();
				header("location:index.php");
			break;
			case "edit":
				$amanah->ubah_amanah();
				header("location:index.php");
			break;

	}


?>