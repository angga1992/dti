<?php
include "koneksi.php";
include "klien.php";
	$action = strtolower($_POST["submit"]);
	$klien = new klien();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$klien->insert_klien();
				header("location:index.php");
			break;
			case "edit":
				$klien->ubah_klien();
				header("location:index.php");
			break;

	}


?>