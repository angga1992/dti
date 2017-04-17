<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>amanah</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

    <script type="text/javascript">
		
		function showDialogSalah(form){
			var harusAngka = /[\d,\s]/;
			
			if(form.amanah.value == ""){
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
                        Home
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
                    <a href="EVENT/index.php">DATA EVENT</a>
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
                       <h1>Input AMANAH</h1>					   
					   	<form method="post" action="action.php" onsubmit="return showDialogSalah(this)">
							<center>
							<table class="table" border="1">

							<tr>
								<th scope="row"> amanah :</th>
								<td><input type="text"  name="amanah"/></td>
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














