<?php
	include "koneksi.php";
	include "user.php";
	
	$id = $_GET[id];
	$user = new user();
	$data_user = $user->get_user_by_id($id);
	include "view.formedit.php";

?>