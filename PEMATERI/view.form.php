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
	
		 <!-- date picker -->
		<link type="text/css" href="asset/css/jquery-ui-1.8.6.custom.css" rel="stylesheet" />   
		<script type="text/javascript" src="asset/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="asset/js/jquery-ui-1.8.6.custom.min.js"></script>
 
	<script>
	$(function() {
    $( "#from" ).datepicker({
	       
      }
    });
    
	</script>
		
<!--	
	<script type="text/javascript">
		
		function showDialogSalah(form){
			var harusAngka = /[\d,\s]/;
			
			if(form.nama_pemateri.value == ""){
				alert("Form nama pemateri masih kosong!");
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
			}else if(form.instansi_profesi.value == ""){
				alert("Form instansi profesi masih kosong!");
				return (false);
			}else if(form.no_ktp.value == ""){
				alert("Form nomor KTP masih kosong!");
				return (false);
			}else if(form.no_rek.value == ""){
				alert("Form nomor rekening masih kosong!");
				return (false);
			}else if(form.npwp.value == ""){
				alert("Form nomor NPWP masih kosong!");
				return (false);
			}else if(form.spesi_materi.value == ""){
				alert("Form spesifikasi materi masih kosong!");
				return (false);
			}else if(!harusAngka.test(form.telepon.value)){
				alert("Form telepon harus angka!");
				return (false);
			}else if(!harusAngka.test(form.hp.value)){
				alert("Form nomor HP harus angka!");
				return (false);
			}else if(!harusAngka.test(form.no_rek.value)){
				alert("Form rekening harus angka!");
				return (false);
			}else if(!harusAngka.test(form.npwp.value)){
				alert("Form NPWP harus angka!");
				return (false);
			}
		}
	</script>
-->

</head>

<body onload="init()">

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
                    <a href="../KLIEN/index.php"><img src='../asset/icons/wb/ic_users.png' /> DATA KLIEN</a>
                </li><br>
                <li>
                    <a href="#"><img src='../asset/icons/wb/ic_list.png' /> DATA PEMATERI</a>
                </li><br>
                <li>
                    <a href="../PANITIA/index.php"><img src='../asset/icons/wb/ic_grid.png' /> DATA PANITIA</a>
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
					<!--enctype="multipart/form-data"-->
										<form method="post" class="form-horizontal" action="action.php" onsubmit="return showDialogSalah(this)">
											<div class="control-group">
											<center>
												<table  class="table" width="350" border="1">
													<tr>
														<th scope="row" class="control-label" >Nama Pemateri :</th>
														<div class="controls">
														<td><input type="text"  name="nama_pemateri" placeholder="nama pemateri"/></td>
														<p class="help-block"></p>
														</div>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Tempat Lahir :</th>
														<td><input type="text" name="tempat_lahir"  placeholder="Tempat Lahir"/></td>
													</tr>
											
													<tr>
														<th scope="row"  class="control-label" for="from">Tanggal Lahir :</th>
														<td><input type="date" name="Tgl"  placeholder="Tanggal Lhir"/></td>
													</tr>
														
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Alamat :</th>
														<td><input type="text" name="alamat" placeholder="alamat"/><br></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Telepon :</th>
														<td><input type="text" name="telepon" placeholder="telepon"/></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">HP :</th>
														<td><input type="text" name="hp" placeholder="hp"/></td>
													</tr>
										
													<tr>
														<th scope="row" class="control-label">EMAIL :</th>
														<td><input type="email" name="email" placeholder="email"/><br></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Pendidikan Terakhir :</th>
														<td>
														<select name="pend_akhir">
															<option></option>
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
														<th scope="row" class="control-label">Riwayat Pendidikan :</th>
														<td><textarea name="riw_pend" rows="5" cols="26"></textarea></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Instansi/Profesi :</th>
														<td><input type="text" name="instansi_profesi" placeholder="instansi / profesi"/></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">NO KTP :</th>
														<td><input type="text" name="no_ktp" placeholder="no ktp"/></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">NO REK :</th>
														<td><input type="text" name="no_rek" placeholder="no rek"/></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">NPWP :</th>
														<td><input type="text" name="npwp" placeholder="npwp"/></td>
													</tr>
											
													<tr>
														<th scope="row" class="control-label">Spesialis Materi :</th>
														<td>
														<select name="spesi_materi">
															<option></option>
															<option>Diniyah Spiritual</option>
															<option>Psikologi</option>
															<option>Kesehatan</option>
															<option>Enterpreneurship</option>
															<option>Leadership</option>
															<option>Outbound</option>
															<option>Anak Remaja</option>
															<option>Lainnya</option>
														</select>
														</td>															
													</tr>	
															
												</table>	
											
											<input type="submit" name="submit" value="simpan"/>
											<input type="submit" name="submit" value="back"/>
											<input type="reset" name="reset" value="reset"/>
										</center>
										</div>
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