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
                    <a href="../KLIEN/index.php"><img src='../asset/icons/wb/ic_users.png' /> DATA KLIEN</a>
                </li><br>
                <li>
                    <a href="../PEMATERI/index.php"><img src='../asset/icons/wb/ic_list.png' /> DATA PEMATERI</a>
                </li><br>
                <li>
                    <a href="../PANITIA/index.php"><img src='../asset/icons/wb/ic_grid.png' /> DATA PANITIA</a>
                </li><br>
                <li>
                    <a href="#"><img src='../asset/icons/wb/ic_time.png' /> DATA EVENT</a>
                </li><br>
				<li>
                    <a href="../USER/index.php"><img src='../asset/icons/wb/ic_user.png' /> USER</a>
                </li><br>
                <li>
                    <a href="../LAPORAN/form.php"><img src='../asset/icons/wb/ic_text_document.png' /> LAPORAN EVENT</a>
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
					   	<form method="post" action="action.php">
	<input type="hidden" name="id" value="<?php echo $data_jadwal_materi['id'];?>"/>
	<center>
		<table class="table" width="350" border="1">
		<tr>
			<th scope="row">Tanggal :</th>
			<td><input type="date"  name="tanggal" value="<?php echo $data_jadwal_materi['tanggal'];?>" /></td>
		</tr>
		
		<tr>
			<th scope="row">Jam Mulai :</th>
			<td><input type="time" name="jam_mulai" value="<?php echo $data_jadwal_materi['jam_mulai'];?>" /></td>
		</tr>
		
		<tr>
			<th scope="row">Jam akhir :</th>
			<td><input type="time" name="jam_akhir" value="<?php echo $data_jadwal_materi['jam_akhir'];?>"/></td>
		</tr>
		
		<tr>
			<th scope="row">Judul Materi :</th>
			<td><input type="text" name="judul_materi" value="<?php echo $data_jadwal_materi['judul_materi'];?>" /><br></td>
		</tr>
		
		<tr>
			<th scope="row"> Nama_Pemateri :</th>
			<td> <select name="nama_pemateri">
				<option>----pilih----</option>
				<?php
				include "koneksi.php";
					$sql = mysql_query ("select * from tb_pemateri order by nama_pemateri asc");
					if(mysql_num_rows($sql) !=0){
						while ($row = mysql_fetch_assoc($sql)){
							echo' <option> ' . $row['nama_pemateri'].'</option>';
						}
					}
				?>
				</select>             
			</td>
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