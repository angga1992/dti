<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kepanitiaan</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

    <script type="text/javascript">
		
		function showDialogSalah(form){
			var harusAngka = /[\d,\s]/;
			
			if(form.katagori.value == ""){
				alert("Form kategori harus di isi!");
				return (false);
			}
		}
	</script>

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
                       <h1>Kepanitiaan</h1>					   
					   	<form method="post" action="action.php" onsubmit="return showDialogSalah(this)">
							<center>
							<table class="table" border="1">
							<tr>
								<th scope="row"> ID event </th>
								<td><input type="text" class="modText" size="15" name="id_event" value="<?php echo $_GET['id'];?>"</td>
							</tr>
							<tr>
								<th scope="row"> Nama Petugas :</th>
								<td>
								<select name="nama">
									<option></option>
									<?php
									include "koneksi.php";
										$sql = mysql_query ("select * from tb_panitia order by nama_panitia asc");
										
										if(mysql_num_rows($sql) !=0){
											while ($row = mysql_fetch_array($sql)){
												echo "<option>".$row['nama_panitia']."</option>";
											}
										}
									?>
								</select>
								</td>
							</tr>
							<tr>
								<th scope="row"> Amanah / Tugas :</th>
								<td><select name="tugas">
									<option></option>
									<?php
									include "koneksi.php";
										$sql = mysql_query ("select * from tb_amanah order by amanah asc");
										
										if(mysql_num_rows($sql) !=0){
											while ($row = mysql_fetch_array($sql)){
												echo "<option>".$row['amanah']."</option>";
											}
										}
									?>
								</select>
							   <a href="../AMANAH/form.php" class="btn btn-default">tambah amanah</a></td>
							
							</tr>
							<tr>
								<th scope="row"> Tanggal Mulai :</th>
								<td><input type="date"  name="tanggal_mulai"/></td>
							</tr>
							<tr>
								<th scope="row"> Tanggal Akhir :</th>
								<td><input type="date"  name="tanggal_akhir"/></td>
							</tr>
							
							</table>
							
							<input type="submit" name="submit" value="simpan"/>
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














