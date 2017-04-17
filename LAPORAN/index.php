<?php

	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	include "laporan.php";
	include "koneksi.php";
	
	$laporan = new laporan();
	$data_laporan = $laporan->get_laporan();
	
	include "view.index.php";
	//print_r($data_laporan);
?>