<html>

<title> </title>
<head>
</head>
	<body>
	<form method="post" action="action.php">
	<input type="hidden" name="id" value="<?php echo $data_user['id'];?>"/>
	<center>
		<table width="350" border="1">
		<tr>
			<th scope="row">Username :</th>
			<td><input type="text"  name="username" value="<?php echo $data_user['username'];?>" /></td>
		</tr>
		<tr>
			<th scope="row">Password :</th>
			<td><input type="text"  name="password" value="<?php echo $data_user['password'];?>" /></td>
		</tr>		
	</table>		
		
		<input type="submit" name="submit" value="edit"/>
		<input type="submit" name="submit" value="back"/>
		<input type="reset" name="reset" value="reset"/>
	</center>
	</form>
	
	</body>
</html>