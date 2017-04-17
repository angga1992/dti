<?php
	
	include "koneksi.php";
	include "login.php";
	
	$login = new login();
	$action = strtolower($_POST["submit"]);
	switch($action){
	
			case "login" :
				
				$data_user = $login->get_login();
				
				if(mysql_num_rows($data_user)==1){
				
					$data_login = mysql_fetch_array($data_user);
					$_SESSION['username'] = $data_login['username']; 
					$_SESSION['password'] = $data_login['password'];
					$_SESSION['is_login'] = true;
					
					header("location:../home.php");
					die();
				}else{
					
					header("location:index.php");
					die();
					
				}
				
			break;
	
	}

?>