<?php

class panitia{

	function insert_panitia(){
		
		$nama_panitia = $_POST["nama_panitia"];
		$tempat_lahir = $_POST["tempat_lahir"];
		$Tgl = $_POST["Tgl"];
		$alamat = $_POST["alamat"];
		$telepon = $_POST["telepon"];
		$hp = $_POST["hp"];
		$email = $_POST["email"];
		$pend_akhir = $_POST["pend_akhir"];
		$riw_pend = $_POST["riw_pend"];
		$aktivitas = $_POST["aktivitas"];
		$aktivitas_asal = $_POST["aktivitas_asal"];
		$gender = $_POST["gender"];
		$status = $_POST["status"];
		
		
		$sql = "insert into tb_panitia(nama_panitia,tempat_lahir,Tgl,alamat, telepon, hp, email, pend_akhir, riw_pend, aktivitas, aktivitas_asal, gender, status)
		value ('$nama_panitia','$tempat_lahir','$Tgl','$alamat','$telepon','$hp','$email','$pend_akhir','$riw_pend','$aktivitas','$aktivitas_asal','$gender','$status')";
		$query =  mysql_query($sql) or die ("gagal query : ".mysql_error());
		
	}	
	function ubah_panitia(){
		$id_panitia = $_POST["id_panitia"];
		$nama_panitia = $_POST["nama_panitia"];
		$tempat_lahir = $_POST["tempat_lahir"];
		$Tgl = $_POST["Tgl"];
		$alamat = $_POST["alamat"];
		$telepon = $_POST["telepon"];
		$hp = $_POST["hp"];
		$email = $_POST["email"];
		$pend_akhir = $_POST["pend_akhir"];
		$riw_pend = $_POST["riw_pend"];
		$aktivitas = $_POST["aktivitas"];
		$aktivitas_asal = $_POST["aktivitas_asal"];
		$gender = $_POST["gender"];
		$status = $_POST["status"];
		
	$sql = "update tb_panitia set nama_panitia = '$nama_panitia', tempat_lahir = '$tempat_lahir',  Tgl ='$Tgl',alamat = '$alamat', telepon = '$telepon', hp = '$hp', email = '$email', pend_akhir = '$pend_akhir', riw_pend = '$riw_pend', aktivitas = '$aktivitas', aktivitas_asal = '$aktivitas_asal', gender ='$gender', status = '$status' where id_panitia = '$id_panitia' "; 
	$query = mysql_query($sql) or die ("failed:".$sql);
	}
	
	function get_panitia(){
		$sql = "select * from tb_panitia";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	function get_panitia_by_id($id){
		
		$sql = "select * from tb_panitia where id_panitia='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}

}
	
		

?>