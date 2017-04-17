<?php

class pemateri{

	function insert_pemateri(){
		
		
		$nama_pemateri = $_POST["nama_pemateri"];
		$tempat_lahir = $_POST["tempat_lahir"];
		$Tgl = $_POST["Tgl"];
		
		$alamat = $_POST["alamat"];
		$telepon = $_POST["telepon"];
		$hp = $_POST["hp"];
		$email = $_POST["email"];
		$pend_akhir = $_POST["pend_akhir"];
		$riw_pend = $_POST["riw_pend"];
		$instansi_profesi = $_POST["instansi_profesi"];
		$no_ktp = $_POST["no_ktp"];
		$no_rek = $_POST["no_rek"];
		$npwp = $_POST["npwp"];
		$spesi_materi = $_POST["spesi_materi"];

			$sql = "insert into tb_pemateri
			(nama_pemateri,tempat_lahir,Tgl,alamat, telepon, hp, email, pend_akhir, riw_pend, instansi_profesi, no_ktp, no_rek, npwp, spesi_materi) value 
			('$nama_pemateri','$tempat_lahir','$Tgl','$alamat','$telepon','$hp','$email','$pend_akhir','$riw_pend','$instansi_profesi','$no_ktp','$no_rek','$npwp','$spesi_materi')";
			$query =  mysql_query($sql) or die ("gagal query : ".$sql);
		
	}
	
	function ubah_pemateri(){
		
		$id_pemateri = $_POST["id_pemateri"];
		$nama_pemateri = $_POST["nama_pemateri"];
		$tempat_lahir = $_POST["tempat_lahir"];
		$Tgl = $_POST["Tgl"];		
		$alamat = $_POST["alamat"];
		$telepon = $_POST["telepon"];
		$hp = $_POST["hp"];
		$email = $_POST["email"];
		$pend_akhir = $_POST["pend_akhir"];
		$riw_pend = $_POST["riw_pend"];
		$instansi_profesi = $_POST["instansi_profesi"];
		$no_ktp = $_POST["no_ktp"];
		$no_rek = $_POST["no_rek"];
		$npwp = $_POST["npwp"];
		$spesi_materi = $_POST["spesi_materi"];
		
		$sql = "update tb_pemateri set nama_pemateri = '$nama_pemateri', tempat_lahir ='$tempat_lahir', Tgl ='$Tgl', alamat = '$alamat', telepon = '$telepon', hp = '$hp', email = '$email', pend_akhir = '$pend_akhir', riw_pend = '$riw_pend', instansi_profesi = '$instansi_profesi', no_ktp = '$no_ktp', no_rek = '$no_rek', npwp = '$npwp', spesi_materi = '$spesi_materi' where id_pemateri='$id_pemateri' ";
		$query = mysql_query($sql) or die ("failed:".$sql);
	}

	
	function get_pemateri(){
		$sql = "select * from tb_pemateri";
		$query = mysql_query($sql) or die ("Gagal query : ".$sql);
		return $query; 
	}
	
	
	function get_pemateri_by_id($id){
		
		$sql = "select * from tb_pemateri where id_pemateri='$id'";
		$query = mysql_query($sql) or die("Gagal query : ".$sql);
		$hasil = mysql_fetch_array($query);
		return $hasil;
		
	}
	
	
	
	

}

?>