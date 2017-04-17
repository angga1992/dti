<?php
	include "koneksi.php";
	include "uang.php";
	
	$id = $_GET[id];
	$uang = new uang();
	$data_uang = $uang->get_uang_by_id($id);
	include "view.formedit.php";

?>