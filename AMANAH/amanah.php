<?php

class amanah{

	function insert_amanah(){
		
		$amanah = $_POST["amanah"];
				
		$sql = "insert into tb_amanah(amanah) value ('$amanah')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_amanah(){
		$amanah = $_POST["amanah"];
		
	$sql = "update tb_amanah set amanah = '$amanah' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_amanah(){
		$sql = "select * from tb_amanah";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_amanah_by_id($id){
		
		$sql = "select * from tb_amanah where id_amanah='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>