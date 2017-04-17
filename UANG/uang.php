<?php

class uang{

	function insert_uang(){
		
		
		$id_event = $_POST["id_event"];
		$nilai_proyek = $_POST["nilai_proyek"];
		$total_biaya = $_POST["total_biaya"];
		$proyeksi_laba = $nilai_proyek - $total_biaya;
		$hpp_event = $total_biaya*100 / $nilai_proyek;
		$ev_pelaksanaan = $_POST["ev_pelaksanaan"];
		$ev_panitia = $_POST["ev_panitia"];
		$ev_pemateri = $_POST["ev_pemateri"];
		
			
		
		$sql = "insert into keuangan (id_event,nilai_proyek, total_biaya, proyeksi_laba, hpp_event, ev_pelaksanaan, ev_panitia, ev_pemateri)
		value ('$id_event','$nilai_proyek','$total_biaya','$proyeksi_laba','$hpp_event','$ev_pelaksanaan','$ev_panitia','$ev_pemateri')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_uang(){
		$id_event = $_POST["id_event"];
		$nilai_proyek = $_POST["nilai_proyek"];
		$total_biaya = $_POST["total_biaya"];
		$proyeksi_laba = $_POST["proyeksi_laba"];
		$hpp_event = $_POST["hpp_event"];
		$ev_pelaksanaan = $_POST["ev_pelaksanaan"];
		$ev_panitia = $_POST["ev_panitia"];
		$ev_pemateri = $_POST["ev_pemateri"];
				
				
		
	$sql = "update keuangan set nilai_proyek = '$nilai_proyek', total_biaya = '$total_biaya', proyeksi_laba = '$proyeksi_laba', hpp_event = '$hpp_event',
	ev_pelaksanaan = '$ev_pelaksanaan', ev_panitia = '$ev_panitia', ev_pemateri = '$ev_pemateri' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_uang(){
		$sql = "select * from keuangan ";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_uang_by_id($id){
		
		$sql = "select * from keuangan where id='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}
	
}
	
		

?>