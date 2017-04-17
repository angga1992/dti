<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panitia</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

	<!--sort-->
	<script src="asset/sort/jquery-latest.js" type="text/javascript"></script> 
	<script src="asset/sort/jquery.tablesorter.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<data table
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
					<!-- tabel -->
					<h1>Data Panitia</h1>
                        
						<a href="form.php" class="btn btn-default" >tambah</a>

		<table class="table" border="1">
			
			<tr bgcolor="#B5B5B0">
				<th>ID</th>
				<th>Photo</th>
				<th>Nama</th>
			    <th>Tempat Lahir</th>
				<th>Tangga Lahir</th>
				<th>Alamat</th>
				<th>Tlp</th>
				<th>Hp</th>
				<th>Email</th>
				<th>Pendidikan terakhir</th>
				<th>Riwayat Pendidikan</th>
				<th>aktivitas saat ini</th>
				<th>aktivitas asal</th>
				<th>gender</th>
				<th>status</th>
				<th>edit</th>
				<th>delete</th>		
				
						
				
			</tr>
			
		<?php while($row = mysql_fetch_array($data_panitia)):;?>	
			<tr>
				<td><?php echo $row["id_panitia"];?></td>
				<td><a href="./photo/<?php echo $row["photo"];?>" target="_blank"><img src="./photo/<?php echo $row["photo"];?>" width="100" height="100" title="<?php echo $row["photo"];?>"></a></td>
				<td><a href="tampil.php"><?php echo $row["nama_panitia"];?></a></td>
				<td><?php echo $row["tempat_lahir"];?></td>
				<td><?php echo $row["Tgl"];?></td>
				<td><?php echo $row["alamat"];?></td>
				<td><?php echo $row["telepon"];?></td>
				<td><?php echo $row["hp"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["pend_akhir"];?></td>
				<td><?php echo $row["riw_pend"];?></td>
				<td><?php echo $row["aktivitas"];?></td>
				<td><?php echo $row["aktivitas_asal"];?></td>
				<td><?php echo $row["gender"];?></td>
				<td><?php echo $row["status"];?></td>
				<td><a href="formedit.php?id=<?php echo $row["id_panitia"]; ?>" class="btn btn-default">edit</a></td>
				<td><a href="delete.php?id=<?php echo $row["id_panitia"]; ?>" class="btn btn-default">delete</a></td>				

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
