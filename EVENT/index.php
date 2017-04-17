<?php
	
	if($_SESSION["is_login"]){
	
		header("location:../login/index.php");
	
	}
	
	include "event.php";
	include "koneksi.php";
	
	$event = new event();
	$data_event = $event->get_event();
	
	include "view.index.php";
	//print_r($data_event);
?>