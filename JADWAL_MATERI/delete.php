<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="mysql"; // Mysql password
$db_name="db_dti"; // Database name
$tbl_name="tb_jadwal_materi"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_GET['id'];
if($id!='')
{

// Delete data in mysql from row that has this id
$sql="DELETE FROM tb_jadwal_materi WHERE id_jadwal='$id'";
$query=mysql_query($sql);
}

include "index.php";
?>