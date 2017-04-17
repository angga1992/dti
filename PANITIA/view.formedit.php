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
    <![endif]-->

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
					   
											<form method="post"   action="action.php">
						<input type="hidden" name="id_panitia" value="<?php echo $id;?>"/>
						<center>
							<table class="table" width="350" border="1">
							<tr>
								<th scope="row">Nama Panitia :</th>
								<td><input type="text"  name="nama_panitia" value="<?php echo $data_panitia['nama_panitia'];?>" /></td>
							</tr>
							
							<tr>
								<th scope="row">Tempat Lahir :</th>
								<td><input type="text" name="tempat_lahir" value="<?php echo $data_panitia['tempat_lahir'];?>" /></td>
							</tr>
							
							<tr>
								<th scope="row">Tanggal Lahir :</th>
								<td><input type="date" name="Tgl" value="<?php echo $data_panitia['Tgl'];?>"/> </td>
							</tr>
							
							<tr>
								<th scope="row">Alamat :</th>
								<td><input type="text" name="alamat" value="<?php echo $data_panitia['alamat'];?>" /><br></td>
							</tr>
							
							<tr>
								<th scope="row">Telepon :</th>
								<td><input type="text" name="telepon" value="<?php echo $data_panitia['telepon'];?>" /></td>
							</tr>
							
							<tr>
								<th scope="row">HP :</th>
								<td><input type="text" name="hp" value="<?php echo $data_panitia['hp'];?>"/></td>
							</tr>
						
							<tr>
								<th scope="row">EMAIL :</th>
								<td><input type="text" name="email" value="<?php echo $data_panitia['email'];?>" /><br></td>
							</tr>
							
							<tr>
								<th scope="row">Pendidikan Akhir :</th>
								<td><select name="pend_akhir">
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
								<th scope="row">Riwayat Pendidikan :</th>
								<td><textarea name="riw_pend" rows="5" cols="26"></textarea> 
							</tr>
							
							<tr>
								<th scope="row">Aktivitas :</th>
								<td><input type="text" name="aktivitas" value="<?php echo $data_panitia['aktivitas'];?>" /></td>
							</tr>
							
							<tr>
								<th scope="row">Aktivitas Asal :</th>
								<td><input type="text" name="aktivitas_asal" value="<?php echo $data_panitia['aktivitas_asal'];?>" /></td>
							</tr>
							
							<tr>
								<th scope="row">Gender :</th>
								<td>
								<select name="gender"  >
									<option></option>
									<option>Ikhwan</option>
									<option>Akhwat</option>
								</select>
								</td>
							</tr>
							<tr>
								<th scope="row"> Status : </th>
								<td>
									<select name="status">
										<option></option>
										<option>Aktif</option>
										<option>Tidak Aktif</option>
									</select>
								</td>
							</tr>
														
						</table>		
							
							<input type="submit" name="submit" value="edit" />
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