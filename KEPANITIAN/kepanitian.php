<?php

class kepanitian{

	function insert_kepanitian(){
		
		
		$id_event = $_POST["id_event"];
		$nama = $_POST["nama"];
		$tugas = $_POST["tugas"];
		$tanggal_mulai = $_POST["tanggal_mulai"];
		$tanggal_akhir = $_POST["tanggal_akhir"];
				
		$sql = "insert into kepanitian(id_event,nama, tugas, tanggal_mulai, tanggal_akhir) value ('$id_event','$nama','$tugas','$tanggal_mulai','$tanggal_akhir')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_kepanitian(){
		$nama = $_POST["nama"];
		$tugas = $_POST["tugas"];
		$tanggal_mulai = $_POST["tanggal_mulai"];
		$tanggal_akhir = $_POST["tanggal_akhir"];
				
		
	$sql = "update kepanitian set nama = '$nama', tugas = '$tugas', tanggal_mulai = '$tanggal_mulai', tanggal_akhir = '$tanggal_akhir' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_kepanitian(){
		$sql = "select * from kepanitian";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_kepanitian_by_id($id){
		
		$sql = "select * from kepanitian where id='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>