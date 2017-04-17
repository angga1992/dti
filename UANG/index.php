<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "uang.php";
	include "koneksi.php";
	
	$uang = new uang();
	$data_uang = $uang->get_uang();
	
	include "view.index.php";
	//print_r($data_uang);
?>