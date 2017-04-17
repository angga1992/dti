<?php

	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	include "panitia.php";
	include "koneksi.php";
	
	$panitia = new panitia();
	$data_panitia = $panitia->get_panitia();
	
	include "view.tampil.php";
	//print_r($data_panitia);
?>