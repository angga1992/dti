<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluasi dan Keuangan</title>

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
                    <a href="KLIEN/index.php">DATA KLIEN</a>
                </li>
                <li>
                    <a href="PEMATERI/index.php">DATA PEMATERI</a>
                </li>
                <li>
                    <a href="PANITIA/index.php">DATA PANITIA</a>
                </li>
                <li>
                    <a href="EVENT/index.php">DATA PELATIHAN</a>
                </li>
				<li>
                    <a href="#">PENGGUNA</a>
                </li>
                <li>
                    <a href="../LAPORAN/form.php">LAPORAN PELATIAN</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <h1>Evaluasi dan Keuangan</h1>					   
					   	<form method="post" action="action.php" onsubmit="return showDialogSalah(this)">
							<center>
							<table class="table" border="1">
							<tr>
								<th scope="row"> ID event </th>
								<td><input type="text" class="modText" size="15" name="id_event" value="<?php echo $_GET['id'];?>"</td>
							</tr>
							<tr>
								<th scope="row"> Nilai Proyek :</th>
								<td><input type="text"  name="nilai_proyek"/></td>
							</tr>
							<tr>
								<th scope="row"> Total biaya :</th>
								<td><input type="text"  name="total_biaya"/></td>
							</tr>
							<tr>
								<th scope="row"> Evaluasi Pelaksanaan :</th>
								<td><input type="text"  name="ev_pelaksanaan"/></td>
							</tr>
							<tr>
								<th scope="row"> Evaluasi Panitia :</th>
								<td><input type="text"  name="ev_panitia"/></td>
							</tr>
							<tr>
								<th scope="row"> Evaluasi Pemateri :</th>
								<td><input type="text"  name="ev_pemateri"/></td>
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














