<html>

<title> </title>
<head>
</head>
	<body>
	<form method="post" action="action.php">
	<input type="hidden" name="id" value="<?php echo $data_uang['id'];?>"/>
	<center>
		<table width="350" border="1">
		<tr>
			<th scope="row">Nilai Proyek :</th>
			<td><input type="text"  name="nilai_proyek" value="<?php echo $data_uang['nilai_proyek'];?>" /></td>
		</tr>
		<tr>
			<th scope="row">Total Biaya :</th>
			<td><input type="text"  name="katagori" value="<?php echo $data_uang['nilai_proyek'];?>" /></td>
		</tr>
				
	</table>		
		
		<input type="submit" name="submit" value="edit"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
	</center>
	</form>
	
	</body>
</html>