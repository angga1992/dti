<?php

class katagori{

	function insert_katagori(){
		
		$katagori = $_POST["katagori"];
				
		$sql = "insert into tb_katagori(katagori) value ('$katagori')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_katagori(){
		$katagori = $_POST["katagori"];
		
	$sql = "update tb_katagori set katagori = '$katagori' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_katagori(){
		$sql = "select * from tb_katagori";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_katagori_by_id($id){
		
		$sql = "select * from tb_katagori where id_katagori='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>