<?php
	include "koneksi.php";
	include "pemateri.php";
	
	$id = $_GET[id];
	$pemateri = new pemateri();
	$data_pemateri = $pemateri->get_pemateri_by_id($id);
	include "view.formedit.php";

?>