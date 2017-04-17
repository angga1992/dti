<?php
	include "koneksi.php";
	include "jadwal_materi.php";
	
	$id = $_GET[id];
	$jadwal_materi = new jadwal_materi();
	$data_jadwal_materi = $jadwal_materi->get_jadwal_materi_by_id($id);
	include "view.formedit.php";

?>