<?php
	
	if(isset($_SESSION["is_login"])){
	
		header("location:../login/index.php");
	
	}

	include "klien.php";
	include "koneksi.php";
	
	$klien = new klien();
	$data_klien = $klien->get_klien();
	
	include "view.index.php";
	//print_r($data_klien);
?>