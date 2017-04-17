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
	<!--search-->
    <script src="asset/filter/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="asset/filter/application.js" type="text/javascript" charset="utf-8"></script>
	<!--data table 1-->
	
	<link href="asset/media/css/jquery.dataTables.css" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="asset/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="asset/media/js/jquery.dataTables.js"></script>
	<!--<script type="text/javascript" charset="utf-8">
	   $(document).ready(function() {
		 $('#p').dataTable();
		 } );
	</script>-->
	<!-- data table 2-->
	<script type='text/javascript' src='asset/datatables/jquery.dataTables.min.js'></script>  
	<script type='text/javascript' src='asset/datatables/jquery.min.js'></script>
	<script type='text/javascript' src='asset/datatables/jquery-ui.min.js'></script>
	<script type='text/javascript' src='asset/datatables/bootstrap.min.js'></script>
	
	<script>
	$(document).ready(function() {
    oTable = $('#datatables').dataTable({
	
    } );
	} );
	</script>
	<script>
	$.extend( $.fn.dataTableExt.oStdClasses, {
    "sWrapper": "dataTables_wrapper form-inline"
	} );

	<!--sort
	<script src="asset/sort/jquery-latest.js" type="text/javascript"></script> 
	<script src="asset/sort/jquery.tablesorter.js" type="text/javascript"></script> -->
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
                        <!-- Panitia -->
						<h1>Data Panitia</h1>
							<a href="form.php" class="btn btn-default" ><img src='../asset/add.png' />Tambah Panitia</a><br>
						<!-- sort by nama -->
						<div class="searchContainer2">
						<img src='../asset/search.png' />
						 <input type="text" size="45" class="search1" placeholder="SEARCH..." name="filter" value="" id="filter"/>
						 <p style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#00CC33;"></p>
						 </div>
		<div class="block-fluid table-sorting clearfix">
	<table cellpadding="0" cellspacing="0" width="100%" class="table" id="datatables">
			<thead>
			<tr bgcolor="#B5B5B0" >
				<th>ID</th>
				<th>Nama</th>
			<!--	<th>Tempat Lahir</th>
				<th>TTL</th>
				<th>Alamat</th>
				<th>Tlp</th>
				<th>Hp</th>
				<th>Email</th>
				<th>Pendidikan terakhir</th>
				<th>Riwayat Pendidikan</th>
				<th>aktivitas saat ini</th>
				<th>aktivitas asal</th>
				<th>gender</th>
				<th>status</th> -->
				<th>Ubah</th>
				<th>Hapus</th>		
				
				
			</tr>
			</thead>
		<?php while($v = mysql_fetch_array($data_panitia)):;?>
			<tbody>
			<tr>
				<td><?php echo $v["id_panitia"];?></td>
				<td><a href="tampil.php"><?php echo $v["nama_panitia"];?></a></td>
				<!--<td><?php echo $v["tempat_lahir"];?></td>
				<td><?php echo $v["Tgl"];?></td>
				<td><?php echo $v["alamat"];?></td>
				<td><?php echo $v["telepon"];?></td>
				<td><?php echo $v["hp"];?></td>
				<td><?php echo $v["email"];?></td>
				<td><?php echo $v["pend_akhir"];?></td>
				<td><?php echo $v["riw_pend"];?></td>
				<td><?php echo $v["aktivitas"];?></td>
				<td><?php echo $v["aktivitas_asal"];?></td>
				<td><?php echo $v["gender"];?></td>
				<td><?php echo $v["status"];?></td>-->
				<td><a href="formedit.php?id=<?php echo $v["id_panitia"]; ?>" class="btn btn-default"><img src='../asset/edit.png' /></a></td>
				<td><a href="delete.php?id=<?php echo $v["id_panitia"]; ?>" class="btn btn-default"><img src='../asset/delete.png' /></a></td>
								

			</tr>
			</tbody>
			<?php endwhile;?>
			
		<table>
				</div>
						
						
						
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
