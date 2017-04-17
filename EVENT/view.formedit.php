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
                    <a href="../KLIEN/index.php"><img src='../asset/icons/wb/ic_users.png' /> DATA KLIEN</a>
                </li><br>
                <li>
                    <a href="../PEMATERI/index.php"><img src='../asset/icons/wb/ic_list.png' /> DATA PEMATERI</a>
                </li><br>
                <li>
                    <a href="../PANITIA/index.php"><img src='../asset/icons/wb/ic_grid.png' /> DATA PANITIA</a>
                </li><br>
                <li>
                    <a href="#"><img src='../asset/icons/wb/ic_time.png' /> DATA PELATIHAN</a>
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
					   	<form method="post" action="action.php">
	<input  name="id_event" value="<?php echo $data_event['id_event'];?>"/>
	<center>
		<table class="table" width="350" border="1">
		<tr>
			<th scope="row">Nama event :</th>
			<td><input type="text"  name="nama_event" value="<?php echo $data_event['nama_event'];?>" /></td>
		</tr>
		
		<tr>
			<th scope="row">Nama Klien</th>
			<td>
			<select name="nama_klien">
				<option>----pilih----</option>
				<?php
				include "koneksi.php";
					$sql = mysql_query ("select * from tb_klien order by nama_klien asc");
					if(mysql_num_rows($sql) !=0){
						while ($row = mysql_fetch_assoc($sql)){
							echo' <option> ' . $row['nama_klien'].'</option>';
						}
					}
				?>
			</select>
			</td>
		</tr>
		
		<tr>
			<th scope="row">Segmen :</th>
			<td>
			<select name="segmen">
				<option>----pilih----</option>
				<option>Dewasa</option>
				<option>Anak Remaja</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<th scope="row"> katagori :</th>
			<td>
			<select name="katagori">
				<option>----pilih----</option>
				<?php
				include "koneksi.php";
					$sql = mysql_query ("select * from tb_katagori order by katagori asc");
					if(mysql_num_rows($sql) !=0){
						while ($row = mysql_fetch_assoc($sql)){
							echo' <option> ' . $row['katagori'].'</option>';
						}
					}
				?>
			</select>
			</td>
		</tr>
		
		<tr>
			<th scope="row">Tanggal_mulai :</th>
			<td><input type="date" name="tgl_mulai" value="<?php echo $data_event['tgl_mulai'];?>" /></td>
		</tr>
		
		<tr>
			<th scope="row">tanggal akhir :</th>
			<td><input type="date" name="tgl_akhir" value="<?php echo $data_event['tgl_akhir'];?>"/></td>
		</tr>
	
		<tr>
			<th scope="row">Tempat :</th>
			<td><input type="text" name="tempat" value="<?php echo $data_event['tempat'];?>" /><br></td>
		</tr>
		
		<tr>
			<th scope="row">kota :</th>
			<td><input type="text" name="kota" value="<?php echo $data_event['kota'];?>" /><br></td>
		</tr>
		<tr>
			<th scope="row">Jumlah Peserta :</th>
			<td><input type="text" name="jum_peserta" value="<?php echo $data_event['jum_peserta'];?>" /></td>
		</tr>
		<tr>
			<th scope="row">fasilitas :</th>
			<td><input type="text" name="fasilitas" value="<?php echo $data_event['fasilitas'];?>" /></td>
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