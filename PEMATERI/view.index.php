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
		
    <!-- bootsrap core css -->
	<link href="asset/css/css/bootsrap.min.css" rel="stylesheet">
    <!-- metismenu css -->
	<link href="asset/css/css/plugins/metisMenu.css" rel="stylesheet">
	<!-- DataTable css -->
	<link href="asset/css/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
	<!-- custom css -->
	<link href="asset/css/css/sb-admin-2.css" rel="stylesheet">
	<!-- custom font -->
	<link href="asset/sb-admin-2/css/css/font-awesome.min.css" rel="stylesheet">
	<!-- jquery v 1.11.0 -->
	<script src ="asset/css/js/jquery-1.11.0.js" </script>
	<!-- bootstrap core js -->
	<script src= "asset/css/js/bootstrap.min.js" </script>
	<!-- metis menu plugin js -->
	<script src= "asset/css/js/plugins/metisMenu.min.js" </script>
	<!-- custom theme js -->
	<script src="asset/css/js/sb-admin.js" </script>
	<!-- DataTables js -->
	<script src="asset/css/js/plugins/dataTables/jquery.dataTables.js" </script>
	<script src="asset/css/js/plugins/dataTables/dataTables.bootstrap.js" </script>
	<!--sort
	<script src="asset/sort/jquery-latest.js" type="text/javascript"></script> 
	<script src="asset/sort/jquery.tablesorter.js" type="text/javascript"></script>
-->
	</head>
	<script src="asset/filter/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="asset/filter/application.js" type="text/javascript" charset="utf-8"></script>
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
	<!--dattable-->
	<link href="asset/datatable/css/dataTables.responsive.css" rel="stylesheet">
	<script src="asset/datatable/js/dataTables.responsive.js" type="text/javascript" charset="utf-8"></script>
	<script src="asset/datatable/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8"></script>
<script>	
$(document).ready( function () {
    $('#table_id').DataTable();
} );
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
					<!-- tabel pemateri -->
					<h1>Data Pemateri</h1>
                        
						<a href="form.php" class="btn btn-default" ><img src='../asset/add.png' />tambah</a>
					<!-- sort by nama -->
						<div class="searchContainer2">
						<img src='../asset/search.png' />
						 <input type="text" size="45" class="search1" placeholder="SEARCH..." name="filter" value="" id="filter"/>
						 <p style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#00CC33;"></p>
						 </div>
		<table class="table" id="table_id">
			<thead>
			<tr bgcolor="#B5B5B0">
				<th>ID</th>
				<th>Nama</th>
				<!--<th>Tempat Lahir</th>
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
				<th>Spesialis</th>-->			
				<th>Ubah</th>			
				<th>Hapus</th>			
						
				
			</tr>
			</thead>
		<?php while($v = mysql_fetch_array($data_pemateri)):;?>
			<tbody>
			<tr>
				<td><?php echo $v["id_pemateri"];?></td>
				<td><a href="tampil.php"><?php echo $v["nama_pemateri"];?></a></td>
				<!--<td><?php echo $v["tempat_lahir"];?></td>
				<td><?php echo $v["Tgl"];?>-<?php echo $v["Bln"];?>-<?php echo $v["Thn"];?></td>
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
				<td><?php echo $v["spesi_materi"];?></td>-->
				<td><a href="formedit.php?id=<?php echo $v["id_pemateri"]; ?>" class="btn btn-default"><img src='../asset/edit.png' /></a></td>
				<td><a href="delete.php?id=<?php echo $v["id_pemateri"]; ?>" class="btn btn-default"><img src='../asset/delete.png' /></a></td>
				
			</tr>
			</tbody>
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

    <!-- Menu Modal Script -->
	<div class="modal fade" id="modal_tambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">bla</h4>
				</div>
				
				<div class="modal-body">
									
						
				</div>
				<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Simpan"/>
				</div>
			
				

			</div>
		</div>
	</div>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('#table').dataTable({
			"ordering":false
			
		});
		
	});
	
	$('.tooltip-demo').tooltip({
		selector: "[data-toggle=modal]"
	});
	</script>

</body>

</html>
