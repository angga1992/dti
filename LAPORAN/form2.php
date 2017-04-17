<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>lAPORAN EVENT</title>

    <!-- Bootstrap Core CSS -->
		<link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
		<link href="asset/css/simple-sidebar.css" rel="stylesheet">
    <!-- date picker -->
		<link type="text/css" href="asset/css/jquery-ui-1.8.6.custom.css" rel="stylesheet" />   
		<script type="text/javascript" src="asset/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="asset/js/jquery-ui-1.8.6.custom.min.js"></script>
	<script>
	$(function() {
    $( "#from" ).datepicker({
	       
	  defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
	  
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
	</script>
	
</head>
<!--
	<script type="text/javascript">
		
		function showDialogSalah(form){
			var harusAngka = /[\d,\s]/;
			
			if(form.nama_event.value == ""){
				alert("Form nama panitia harus di isi!");
				return (false);
			}else if(form.nama_klien.value == ""){
				alert("Form tempat lahir masih kosong!");
				return (false);
			}else if(form.segmen.value == ""){
				alert("Form tanggal lahir masih kosong!");
				return (false);
			}else if(form.katagori.value == ""){
				alert("Form alamat masih kosong!");
				return (false);
			}else if(form.tgl_mulai.value == ""){
				alert("Form telepon masih kosong!");
				return (false);
			}else if(form.tgl_akhir.value == ""){
				alert("Form nomor HP masih kosong!");
				return (false);
			}else if(form.tempat.value == ""){
				alert("Form email masih kosong!");
				return (false);
			}else if(form.kota.value == ""){
				alert("Form pendidikan terakhir masih kosong!");
				return (false);
			}else if(form.jum_peserta.value == ""){
				alert("Form riwayat pendidikan masih kosong!");
				return (false);
			}else if(form.fasilitas.value == ""){
				alert("Form aktivitas masih kosong!");
				return (false);
			}else if(!harusAngka.test(form.jum_peserta.value)){
				alert("Form jumlah peserta harus angka!");
				return (false);
			}
		}
	</script>
-->
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../home.php">
                        Home
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
                    <a href="#">DATA EVENT</a>
                </li>
                <li>
                    <a href="#">DATA PEMBINAAN SDM</a>
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
                        <h1>Laporan Event Periode</h1>
           <form method="post" action="filter.php" target="_blank">
		<center>
		<table class="table"  border="1">
		
		
		<tr>
			<th scope="row" for="from" > Tanggal Mulai :</th>
			<td><input type="date"  name="tgl_mulai" id="from" /></td>
		</tr>
		<tr>
			<th scope="row" for="to" > Tanggal Akhir:</th>
			<td><input type="date" name="tgl_akhir" id="to" /></td>
		</tr>
		
		</table>
		
		
		
		<input type="submit" name="cari" value="Cari"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
		</center>	
	</form>
		
		<?php 
			if(isset($_GET['cari'])){
				
				include("koneksi.php");
				
			
				$query = mysql_query(" SELECT * FROM tb_event natural join kepanitian natural join tb_jadwal_materi ");
				echo "<table border='1'>";
				echo "<tr><td>Nama Event</td><td>Nama klien</td></tr>";
				while($row = mysql_fetch_array($query)){				
		?>
				<tr>
				<td><?php echo $row['nama_event'];?></td>	
				<td><?php echo $row['nama_klien'];?></td>	
				
		
				</tr>
		<?php	
				}
				echo "</table>";
			}
		?>
		
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
