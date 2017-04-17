<?php
	
	class login{
		
		function get_login(){
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$sql = "select * from tb_user where username='$username' and password='$password'";
			
			$result = mysql_query($sql) or die("Gagal query".$sql);
			
			return $result;
		}
		function insert_login(){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$sql = "insert into tb_user(username,password) value ('$username','$password')";
			$query =  mysql_query($sql) or die ("gagal query : ".$sql);		
		
		
		
		}
	
	}

?>