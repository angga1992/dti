<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "amanah.php";
	include "koneksi.php";
	
	$amanah = new amanah();
	$data_amanah = $amanah->get_amanah();
	
	include "view.index.php";
	//print_r($data_amanah);
?>