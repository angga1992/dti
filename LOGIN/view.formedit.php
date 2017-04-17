<html>

<title> </title>
<head>
</head>
	<body>
	<form method="post" action="action.php">
	<input type="hidden" name="id_katagori" value="<?php echo $data_katagori['id_katagori'];?>"/>
	<center>
		<table width="350" border="1">
		<tr>
			<th scope="row">Nama klien :</th>
			<td><input type="text"  name="katagori" value="<?php echo $data_katagori['katagori'];?>" /></td>
		</tr>
				
	</table>		
		
		<input type="submit" name="submit" value="edit"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
	</center>
	</form>
	
	</body>
</html>