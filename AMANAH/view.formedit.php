<html>

<title> </title>
<head>
</head>
	<body>
	<form method="post" action="action.php">
	<input type="hidden" name="id_amanah" value="<?php echo $data_amanah['id'];?>"/>
	<center>
		<table width="350" border="1">
		<tr>
			<th scope="row">AMANAH :</th>
			<td><input type="text"  name="amanah" value="<?php echo $data_amanah['amanah'];?>" /></td>
		</tr>
				
	</table>		
		
		<input type="submit" name="submit" value="edit"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
	</center>
	</form>
	
	</body>
</html>