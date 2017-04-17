<?php
	include "koneksi.php";
	include "panitia.php";
	
	$id = $_GET[id];
	$panitia = new panitia();
	$data_panitia = $panitia->get_panitia_by_id($id);
	include "view.formedit.php";

?>