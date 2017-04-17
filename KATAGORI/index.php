<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "katagori.php";
	include "koneksi.php";
	
	$katagori = new katagori();
	$data_katagori = $katagori->get_katagori();
	
	include "view.index.php";
	//print_r($data_katagori);
?>