<?php
	include "koneksi.php";
	include "klien.php";
	
	$id = $_GET[id];
	$klien = new klien();
	$data_klien = $klien->get_klien_by_id($id);
	include "view.formedit.php";

?>