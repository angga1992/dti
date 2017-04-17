<?php
include "koneksi.php";
include "jadwal_materi.php";
	$action = strtolower($_POST["submit"]);
	$jadwal_materi = new jadwal_materi();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$jadwal_materi->insert_jadwal_materi();
				header("location:index.php");
			break;
			case "edit":
				$jadwal_materi->ubah_jadwal_materi();
				header("location:index.php");
			break;

	}


?>