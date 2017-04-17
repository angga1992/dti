<?php
include "koneksi.php";
include "panitia.php";
	$action = strtolower($_POST["submit"]);
	$panitia = new panitia();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$panitia->insert_panitia();
				header("location:index.php");
			break;
			case "edit":
				$panitia->ubah_panitia();
				header("location:index.php");
			break;

	}


?>