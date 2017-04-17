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
                    <a href="../KLIEN/index.php">DATA KLIEN</a>
                </li>
                <li>
                    <a href="../PEMATERI/index.php">DATA PEMATERI</a>
                </li>
                <li>
                    <a href="../PANITIA/index.php">DATA PANITIA</a>
                </li>
                <li>
                    <a href="../EVENT/index.php">DATA PELATIHAN</a>
                </li>
                <li>
                    <a href="#">PENGGUNA</a>
                </li>
                <li>
                    <a href="../LAPORAN/form.php">LAPORAN PELATIHAN</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <h1>Keuangan dan Evaluasi</h1>
					   <a href="../EVENT/index.php" class="btn btn-default" >back to event</a>
	   <table class="table" border="1">
			
			<tr bgcolor="#B5B5B0">
				<th>ID</th>
				<th>ID EVENT</th>
				<th>Nilai Proyek</th>
				<th>Total Biaya</th>
				<th>Proyeksi Laba</th>
				<th>HPP EVENT</th>
				<th>Ev. Pelaksanaan</th>
				<th>Ev. Panitia</th>
				<th>Ev. Pemateri</th>
				<th></th>
				<th></th>
						
				
			</tr>
		<?php while($v = mysql_fetch_array($data_uang)):;?>
			<tr>
				<td><?php echo $v["id"];?></td>
				<td><?php echo $v["id_event"];?></td>
				<td><?php echo $v["nilai_proyek"];?></td>
				<td><?php echo $v["total_biaya"];?></td>
				<td><?php echo $v["proyeksi_laba"];?></td>
				<td><?php echo $v["hpp_event"];?></td>
				<td><?php echo $v["ev_pelaksanaan"];?></td>
				<td><?php echo $v["ev_panitia"];?></td>
				<td><?php echo $v["ev_pemateri"];?></td>
								
				<td><a href="formedit.php?id=<?php echo $v["id"]; ?>">edit</a></td>
				<td><a href="delete.php?id=<?php echo $v["id"]; ?>">delete</a></td>
								

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
