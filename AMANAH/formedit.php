<?php
	include "koneksi.php";
	include "amanah.php";
	
	$id = $_GET[id];
	$amanah = new amanah();
	$data_amanah = $amanah->get_amanah_by_id($id);
	include "view.formedit.php";

?>