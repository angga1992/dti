<?php
include "koneksi.php";
include "katagori.php";
	$action = strtolower($_POST["submit"]);
	$katagori = new katagori();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php`");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$katagori->insert_katagori();
				header("location:index.php");
			break;
			case "edit":
				$katagori->ubah_katagori();
				header("location:index.php");
			break;

	}


?>