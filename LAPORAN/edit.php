<?php
include ("koneksi.php");
//menangkap variabel yang di kirim oleh view.php untuk di update
		$nama_panitia = $_POST["nama_panitia"];
		$tempat_lahir = $_POST["tempat_lahir"];
		$tanggal_lahir = $_POST["tanggal_lahir"];
		$alamat = $_POST["alamat"];
		$telepon = $_POST["telepon"];
		$hp = $_POST["hp"];
		$email = $_POST["email"];
		$pend_akhir = $_POST["pend_akhir"];
		$riw_pend = $_POST["riw_pend"];
		$aktivitas = $_POST["aktivitas"];
		$aktivitas_asal = $_POST["aktivitas_asal"];
		$gender = $_POST["gender"];
	
 
//Disini query untuk mengupdate
$sql= "update tb_pemateri set tb_pemateri (nama_pemateri,tempat_lahir,tanggal_lahir,alamat, telepon, hp, email, pend_akhir, riw_pend, instansi_profesi, no_ktp, no_rek, npwp, spesi_materi) value ('$nama_pemateri','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$hp','$email','$pend_akhir','$riw_pend','$instansi_profesi','$no_ktp','$no_rek','$npwp','$spesi_materi')";
$query=mysql_query($sql);
 
//menampilkan laporan hasil update
//jika berhasil maka akan menamplikan update berhasil bos
//jika gagal maka akan menampilkan update gagal bos

?>