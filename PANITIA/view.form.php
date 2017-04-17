<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MANAJEMEN EVENT DTI</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--
	<script type="text/javascript">
		
		function showDialogSalah(form){
			var harusAngka = /[\d,\s]/;
			
			if(form.nama_panitia.value == ""){
				alert("Form nama panitia harus di isi!");
				return (false);
			}else if(form.tempat_lahir.value == ""){
				alert("Form tempat lahir masih kosong!");
				return (false);
			}else if(form.tanggal_lahir.value == ""){
				alert("Form tanggal lahir masih kosong!");
				return (false);
			}else if(form.alamat.value == ""){
				alert("Form alamat masih kosong!");
				return (false);
			}else if(form.telepon.value == ""){
				alert("Form telepon masih kosong!");
				return (false);
			}else if(form.hp.value == ""){
				alert("Form nomor HP masih kosong!");
				return (false);
			}else if(form.email.value == ""){
				alert("Form email masih kosong!");
				return (false);
			}else if(form.pend_akhir.value == ""){
				alert("Form pendidikan terakhir masih kosong!");
				return (false);
			}else if(form.riw_pend.value == ""){
				alert("Form riwayat pendidikan masih kosong!");
				return (false);
			}else if(form.aktivitas.value == ""){
				alert("Form aktivitas masih kosong!");
				return (false);
			}else if(form.aktivitas_asal.value == ""){
				alert("Form aktivitas masih kosong!");
				return (false);
			}else if(form.gender.value == ""){
				alert("Form gender masih kosong!");
				return (false);
			}else if(form.status.value == ""){
				alert("Form status masih kosong!");
				return (false);
			}else if(!harusAngka.test(form.telepon.value)){
				alert("Form telepon harus angka!");
				return (false);
			}else if(!harusAngka.test(form.hp.value)){
				alert("Form nomor HP harus angka!");
				return (false);
			}
		}
	</script>
-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../home.php">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="../KLIEN/index.php"><img src='../asset/icons/wb/ic_users.png' /> DATA KLIEN </a>
                </li><br>
                <li>
                    <a href="../PEMATERI/index.php"><img src='../asset/icons/wb/ic_list.png' /> DATA PEMATERI</a>
                </li><br>
                <li>
                    <a href="#"><img src='../asset/icons/wb/ic_grid.png' /> DATA PANITIA</a>
                </li><br>
                <li>
                    <a href="../EVENT/index.php"><img src='../asset/icons/wb/ic_time.png' /> DATA PELATIHAN</a>
                </li><br>
				<li>
                    <a href="../USER/index.php"><img src='../asset/icons/wb/ic_user.png' /> PENGGUNA</a>
                </li><br>
                <li>
                    <a href="../LAPORAN/form.php"><img src='../asset/icons/wb/ic_text_document.png' /> LAPORAN PELATIHAN</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       DUTA TRANSFORMASI INSANI
											<form method="post" action="action.php"  onsubmit="return showDialogSalah(this)">
							<center>
							<table class="table"  width="350" border="1">
							<tr>
								<th scope="row"> Nama Panitia :</th>
								<td><input type="text"  name="nama_panitia" placeholder="nama panitia" require /></td>
							</tr>
							<tr>
								<th scope="row"> Tempat Lahhir :</th>
								<td><input type="text"  name="tempat_lahir" placeholder="Tempat Lahir"/></td>
							</tr>
							<tr>
								<th scope="row"  class="control-label">Tanggal Lahir :</th>
								<td><input type="date" name="Tgl"/></td>										
							</tr>
							<tr>
								<th scope="row"> Alamat :</th>
								<td><input type="text"  name="alamat" placeholder="alamat"/></td>
							</tr>
							<tr>
								<th scope="row"> Telepon :</th>
								<td><input type="text" name="telepon" placeholder="telepon"/></td>
							</tr>
								<tr>
								<th scope="row"> HP :</th>
								<td><input type="text" name="hp" placeholder="hp"/></td>
							</tr>
							<tr>
								<th scope="row"> EMAIL :</th>
								<td><input type="text" name="email" placeholder="email"/></td>
							</tr>
							<tr>
								<th scope="row"> Pendidikan Akhir :</th>
								<td>
									<select name="pend_akhir">
										<option>   </option>
										<option>SD</option>
										<option>SMP</option>
										<option>SMA</option>
										<option>DIPLOMA</option>
										<option>S-1</option>
										<option>S-2</option>
										<option>S-3</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"> Riwayat Pendidikan :</th>
								<td><textarea name="riw_pend" rows="5" cols="26"></textarea></td>
							</tr>
							<tr>
								<th scope="row"> Aktivitas saat ini :</th>
								<td><input type="text" name="aktivitas" placeholder="aktvts saat ini"/></td>
							</tr>
							<tr>
								<th scope="row"> Aktivitas asal :</th>
								<td><input type="text" name="aktivitas_asal" placeholder="aktivitas_asal"/></td>
							</tr>
							<tr>
								<th scope="row">Gender :</th>
								<td>
								<select name="gender">
									<option>     </option>
									<option>Ikhwan</option>
									<option>Akhwat</option>
								</select>
								</td>
							</tr>
							<tr>
								<th scope="row"> Status : </th>
								<td>
									<select name="status">
										<option>      </option>
										<option>Aktif</option>
										<option>Tidak Aktif</option>
									</select>
								</td>
							</tr>
						</table>
									
		<input type="submit" name="submit" value="simpan"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
		</center>	
	</form>

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="asset/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
































<html>

<title> </title>
<head>
</head>
	<body>
	
	
	</body>
</html>