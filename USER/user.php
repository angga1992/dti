<?php

class user{

	function insert_user(){
		
		$username = $_POST["username"];
		$password = $_POST["password"];
				
		$sql = "insert into tb_user(username, password) value ('$username','$password')";
		$query =  mysql_query($sql) or die ("gagal query : ".$sql);
	}
	function ubah_user(){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
	$sql = "update tb_user set username = '$user', password = '$password' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_user(){
		$sql = "select * from tb_user";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_user_by_id($id){
		
		$sql = "select * from tb_user where id ='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>