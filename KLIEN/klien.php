<?php

class klien{

	function insert_klien(){
		
		$nama_klien = $_POST["nama_klien"];
		$alamat_klien = $_POST["alamat_klien"];
		$telp_klien = $_POST["telp_klien"];
		$fax_klien = $_POST["fax_klien"];
		
	
		
		$sql = "insert into tb_klien(nama_klien,alamat_klien,telp_klien,fax_klien) value ('$nama_klien','$alamat_klien','$telp_klien','$fax_klien')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
		}
	
	function ubah_klien(){
		$id_klien = $_POST["id_klien"];
		$nama_klien = $_POST["nama_klien"];
		$alamat_klien = $_POST["alamat_klien"];
		$telp_klien = $_POST["telp_klien"];
		$fax_klien = $_POST["fax_klien"];
		
	$sql = "update tb_klien set nama_klien = '$nama_klien', alamat_klien = '$alamat_klien', telp_klien = '$telp_klien', fax_klien = '$fax_klien' where id_klien = '$id_klien' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
		
	}
	
	function get_klien(){
		$sql = "select * from tb_klien";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_klien_by_id($id){
		
		$sql = "select * from tb_klien where id_klien='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>