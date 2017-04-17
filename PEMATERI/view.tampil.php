<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemateri</title>

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
                    <a href="../KLIEN/index.php">DATA KLIEN</a>
                </li>
                <li>
                    <a href="#">DATA PEMATERI</a>
                </li>
                <li>
                    <a href="../PANITIA/index.php">DATA PANITIA</a>
                </li>
                <li>
                    <a href="../EVENT/index.php">DATA EVENT</a>
                </li>
           
                <li>
                    <a href="#">LAPORAN EVENT</a>
                </li>
                <li>
                    <a href="#">LAPORAN SDM</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					<!-- tabel pemateri -->
					<h1>Data Pemateri</h1>
                        
						<a href="form.php" class="btn btn-default" >tambah</a>

		<table class="table" border="1">
			
			<tr bgcolor="#B5B5B0">
				<th>ID</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>TTL</th>
				<th>Alamat</th>
				<th>Tlp</th>
				<th>Hp</th>
				<th>Email</th>
				<th>Pendidikan terakhir</th>
				<th>Pendidikan</th>
				<th>instansi/Profesi</th>			
				<th>No KTP</th>			
				<th>No Rek</th>			
				<th>NPWP</th>			
				<th>Spesialis</th>		
				<th>photo</th>		
				<th>edit</th>			
				<th>delete</th>			
				
						
				
			</tr>
			
		<?php while($v = mysql_fetch_array($data_pemateri)):;?>
			
			<tr>
				<td><?php echo $v["id_pemateri"];?></td>
				<td><?php echo $v["nama_pemateri"];?></td>
				<td><?php echo $v["tempat_lahir"];?></td>
				<td><?php echo $v["Tgl"];?></td>
				<td><?php echo $v["alamat"];?></td>
				<td><?php echo $v["telepon"];?></td>
				<td><?php echo $v["hp"];?></td>
				<td><?php echo $v["email"];?></td>
				<td><?php echo $v["pend_akhir"];?></td>
				<td><?php echo $v["riw_pend"];?></td>
				<td><?php echo $v["instansi_profesi"];?></td>
				<td><?php echo $v["no_ktp"];?></td>
				<td><?php echo $v["no_rek"];?></td>
				<td><?php echo $v["npwp"];?></td>
				<td><?php echo $v["spesi_materi"];?></td>
				<td><a href="./photo/<?php echo $v["photo"];?>" target="_blank"><img src="./photo/<?php echo $v["photo"];?>" width="100" height="100" title="<?php echo $v["photo"];?>"></a></td>
				<td><a href="formedit.php?id=<?php echo $v["id_pemateri"]; ?>" class="btn btn-default">edit</a></td>
				<td><a href="delete.php?id=<?php echo $v["id_pemateri"]; ?>" class="btn btn-default">delete</a></td>
				
			</tr>
			<?php endwhile;?>
		
		<table>


						
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
