<?php
	include "koneksi.php";
	include "katagori.php";
	
	$id = $_GET[id];
	$katagori = new katagori();
	$data_katagori = $katagori->get_katagori_by_id($id);
	include "view.formedit.php";

?>