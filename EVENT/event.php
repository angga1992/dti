<?php

class event{

	function insert_event(){
		
		$nama_event = $_POST["nama_event"];
		$nama_klien = $_POST["nama_klien"];
		$segmen = $_POST["segmen"];
		$katagori = $_POST["katagori"];
		$tgl_mulai = $_POST["tgl_mulai"];
		$tgl_akhir = $_POST["tgl_akhir"];
		$tempat = $_POST["tempat"];
		$kota = $_POST["kota"];
		$jum_peserta = $_POST["jum_peserta"];
		$fasilitas = $_POST["fasilitas"];
		
		
		$sql = "insert into tb_event(nama_event,nama_klien,segmen,katagori,tgl_mulai,tgl_akhir,tempat, kota,jum_peserta,fasilitas) value ('$nama_event','$nama_klien','$segmen','$katagori','$tgl_mulai','$tgl_akhir','$tempat','$kota','$jum_peserta','$fasilitas')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_event(){
		$id_event = $_POST["id_event"];
		$nama_event = $_POST["nama_event"];
		$nama_klien = $_POST["nama_klien"];
		$segmen = $_POST["segmen"];
		$katagori = $_POST["katagori"];
		$tgl_mulai = $_POST["tgl_mulai"];
		$tgl_akhir = $_POST["tgl_akhir"];
		$tempat = $_POST["tempat"];
		$kota = $_POST["kota"];
		$jum_peserta = $_POST["jum_peserta"];
		$fasilitas = $_POST["fasilitas"];
		
	$sql = "update tb_event set nama_event = '$nama_event', nama_klien = '$nama_klien', segmen = '$segmen', katagori = '$katagori', tgl_mulai = '$tgl_mulai', tgl_akhir = '$tgl_akhir', tempat = '$tempat', kota = '$kota', jum_peserta = '$jum_peserta', fasilitas = '$fasilitas' where id_event = '$id_event' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_event(){
		$sql = "select * from tb_event";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_event_by_id($id){
		
		$sql = "select * from tb_event where id_event='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}
	
}
	
		

?>