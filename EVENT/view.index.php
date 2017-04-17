<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>event</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">
	<!--sort-->
	<script src="asset/sort/jquery-latest.js" type="text/javascript"></script> 
	<script src="asset/sort/jquery.tablesorter.js" type="text/javascript"></script>
	<!--search-->
    <script src="asset/filter/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="asset/filter/application.js" type="text/javascript" charset="utf-8"></script>

</head>
<script type='text/javascript'>
<!--
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var thisDay = date.getDay(),
    thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
//-->
</script>

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
                        <h1>Data Event / Pelatihan</h1>
                        <a href="form.php" class="btn btn-default"><img src='../asset/add.png' />Tambah Event</a>
						<a href="../JADWAL_MATERI" class="btn btn-default">Pemateri</a>
						<a href="../KEPANITIAN" class="btn btn-default">Panitia</a>
						<!-- sort by nama -->
						<div class="searchContainer2">
						<img src='../asset/search.png' />
						 <input type="text" size="45" class="search1"  placeholder="cari..." name="filter" value="" id="filter"/>
						 <p style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#00CC33;"></p>
						 </div>
		<table class="table" border="1" id="myTable">
			
			<tr bgcolor="#B5B5B0">
				<th>ID</th>
				<th>Nama Even</th>
				<th>Nama Klien</th>
				<th>Pemateri</th>
				<th>Panitia</th>
				<th>Keuangan</th>
				<th>Laporan</th>
				<th>Ubah</th>
				<th>Hapus</th>		
				
				
			</tr>
		<?php while($v = mysql_fetch_array($data_event)):;?>
			<tr>
				<td><?php echo $v["id_event"];?></td>
				<td><?php echo $v["nama_event"];?></td>
				<td><?php echo $v["nama_klien"];?></td>
				<td><a href="../JADWAL_MATERI/form.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default"><img src='../asset/add.png' />Pemateri</a></td>
				<td><a href="../KEPANITIAN/form.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default"><img src='../asset/add.png' />Panitia</a></td>
				<td><a href="../UANG/form.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default"><img src='../asset/add.png' />keuangan</a></td>
				<td><a href="../LAPORAN/filter2.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default" target="_blank">Laporan</a></td>
				<td><a href="formedit.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default"><img src='../asset/edit.png' /></a></td>
				<td><a href="delete.php?id=<?php echo $v["id_event"]; ?>" class="btn btn-default"><img src='../asset/delete.png' /></a></td>
								

			</tr>
			<?php endwhile;?>
			
		</table>
		
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
