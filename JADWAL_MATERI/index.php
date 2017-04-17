<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "jadwal_materi.php";
	include "koneksi.php";
	
	$jadwal_materi = new jadwal_materi();
	$data_jadwal_materi = $jadwal_materi->get_jadwal_materi();
	
	include "view.index.php";
	//print_r($data_jadwal_materi);
?>