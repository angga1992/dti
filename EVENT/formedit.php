<?php
	include "koneksi.php";
	include "event.php";
	
	$id = $_GET[id];
	$event = new event();
	$data_event = $event->get_event_by_id($id);
	include "view.formedit.php";

?>