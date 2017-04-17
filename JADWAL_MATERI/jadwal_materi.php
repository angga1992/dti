<?php

class jadwal_materi{

	function insert_jadwal_materi(){
		
		$id_event = $_POST["id_event"];
		$tanggal = $_POST["tanggal"];
		$jam_mulai = $_POST["jam_mulai"];
		$jam_akhir = $_POST["jam_akhir"];
		$judul_materi = $_POST["judul_materi"];
		$nama_pemateri = $_POST["nama_pemateri"];
				
		$sql = "insert into tb_jadwal_materi(id_event, tanggal,jam_mulai,jam_akhir,judul_materi,nama_pemateri) value ('$id_event','$tanggal','$jam_mulai','$jam_akhir','$judul_materi','$nama_pemateri')";
		
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_jadwal_materi(){
		$tanggal = $_POST["tanggal"];
		$jam_mulai = $_POST["jam_mulai"];
		$jam_akhir = $_POST["jam_akhir"];
		$judul_materi = $_POST["judul_materi"];
		$nama_pemateri = $_POST["nama_pemateri"];
			
		$sql = "update tb_jadwal_materi set tanggal = '$tanggal', jam_mulai = '$jam_mulai', jam_akhir = '$jam_akhir', judul_materi = '$judul_materi', nama_pemateri = '$nama_pemateri'"; 
		$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_jadwal_materi(){
		$sql = "select * from tb_jadwal_materi";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_jadwal_materi_by_id($id){
		
		$sql = "select * from tb_jadwal_materi where id='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}
	
}
	
		

?>