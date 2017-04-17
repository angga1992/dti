<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	include "pemateri.php";
	include "koneksi.php";
	
	$pemateri = new pemateri();
	$data_pemateri = $pemateri->get_pemateri();
	
	include "view.tampil.php";
	//print_r($data_pemateri);

?>