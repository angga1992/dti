<?php
include "koneksi.php";
include "pemateri.php";


	$action = strtolower($_POST["submit"]);
	$pemateri = new pemateri();

	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			
			case "simpan":
			
				$pemateri->insert_pemateri();
				header("location:index.php");
			break;
			
			case "Delete":
			
				
				header("location:index.php");
			break;
			case "edit":
				$pemateri->ubah_pemateri();
				header("location:index.php");
			break;
			
						
	}


?>