<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "kepanitian.php";
	include "koneksi.php";
	
	$kepanitian = new kepanitian();
	$data_kepanitian = $kepanitian->get_kepanitian();
	
	include "view.index.php";
	//print_r($data_kepanitian);
?>