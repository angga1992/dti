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
                    <a href="#"><img src='../asset/icons/wb/ic_users.png' /> DATA KLIEN</a>
                </li><br>
                <li>
                    <a href="../PEMATERI/index.php"><img src='../asset/icons/wb/ic_list.png' /> DATA PEMATERI</a>
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
                       DUTA TRANSFORMASI INSANI
					   <!--enctype="multipart/form-data"-->
					   <form method="post"  action="action.php">
							<input type="hidden" name="id_klien" value="<?php echo $id;?>"/>
							<center>
								<table class="table" width="350" border="1">
								<tr>
									<th scope="row">Nama klien :</th>
									<td><input type="text"  name="nama_klien" value="<?php echo $data_klien['nama_klien'];?>" /></td>
								</tr>
								
								<tr>
									<th scope="row">Alamat:</th>
									<td><input type="text" name="alamat_klien" value="<?php echo $data_klien['alamat_klien'];?>" /></td>
								</tr>
								
								<tr>
									<th scope="row">Tlp :</th>
									<td><input type="text" name="telp_klien" value="<?php echo $data_klien['telp_klien'];?>" /><br></td>
								</tr>
								
								<tr>
									<th scope="row">Fax :</th>
									<td><input type="text" name="fax_klien" value="<?php echo $data_klien['fax_klien'];?>" /></td>
								</tr>
								
								
							
										

								
							</table>		
								
								<input type="submit" name="submit" value="edit"/>
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
