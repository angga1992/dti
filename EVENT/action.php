<?php
include "koneksi.php";
include "event.php";
	$action = strtolower($_POST["submit"]);
	$event = new event();
	switch($action){
	
		
			case "back" :
			
				header("location:index.php");
			break;
			case "delete":
			
				
				header("location:index.php");
			
			case "simpan":
			
				$event->insert_event();
				header("location:index.php");
			break;
			case "edit":
				$event->ubah_event();
				header("location:index.php");
			break;

	}


?>