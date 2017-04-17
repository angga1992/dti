<style type="text/css">
table
 {
  width:770px;
 }
 
td
 {
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:13px;
 text-transform:uppercase;
 border:1px solid #666666;
 }

thead
 {
  font-weight:bold;
 }
 
div.head
 {
  width:780px;
  height:150px;
  margin-bottom:1px;
  margin-top:50px;
  text-align:center;
 }
 
div.footer
 {
  width:780px;
  height:150px;
  margin-top:50px;
 }
 
p.head
 {
  font-family:Arial, Helvetica, sans-serif;
  font-size:12px;
  line-height:3px;
 }
 
p.footer
 {
  font-family:Arial, Helvetica, sans-serif;
  font-size:12px;
  line-height:3px;
  text-align:center;
 }

 
p.headBold
 {
  font-family:Arial, Helvetica, sans-serif;
  font-size:14px;
  line-height:3px;
 }
 
p.headTitle
 {
  font-family:Arial, Helvetica, sans-serif;
  font-size:18px;
  line-height:3px;
 }
 
div.left
 {
  height:150px;
  width:380px;
  float:left;
 }
div.Right
 {
  height:150px;
  width:380px;
  float:right;
 }

</style>
<center>
<div class="head">
 <p class="head"></p>
 <p class="headBold"><b>DUTA TRANSFORMASI INSANI</b></p>
 <p class="head">DIVI MANAJEMEN PELALTIHAN</p>
 <br />
 <p class="headTitle"><b>LAPORAN</b></p>
</div>
<table>

		<?php 
			if(isset($_POST['cari'])){
				
				include("koneksi.php");
				
				$tgl_mulai=$_POST['tgl_mulai'];
				$tgl_akhir=$_POST['tgl_akhir'];
				
				//$tgl_mulai=str_replace("-","/",$tgl_mulai);
				//$tgl_akhir=str_replace("-","/",$tgl_akhir);
				
				$query = mysql_query("SELECT * FROM tb_event where tgl_mulai >= '$tgl_mulai' AND tgl_akhir <= '$tgl_akhir' ");
				echo "<table border='1'>";
				echo "<tr><th>No</th>
					  <th>ID</th>
					  <th>Nama Event</th>
					  <th>Instansi</th>
					  <th>Segmen</th>
					  <th>Tanggal mulai</th>
					  <th>tanggal akhir</th>
					  <th>tempat</th>
					  <th>Kota</th>
					  <th>jumlah peserta</th>
					  <th>Fasilitas</th>
					  <th>Kategori</th></tr>";
				while($row = mysql_fetch_array($query)){				
		?>
				<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $row['id_event'];?></td>	
				<td><?php echo $row['nama_event'];?></td>	
				<td><?php echo $row['nama_klien'];?></td>	
				<td><?php echo $row['segmen'];?></td>	
				<td><?php echo $row['tgl_mulai'];?></td>	
				<td><?php echo $row['tgl_akhir'];?></td>	
				<td><?php echo $row['tempat'];?></td>	
				<td><?php echo $row['kota'];?></td>	
				<td><?php echo $row['jum_peserta'];?></td>	
				<td><?php echo $row['fasilitas'];?></td>	
				<td><?php echo $row['katagori'];?></td>	
				
		
				</tr>
		<?php	
				}
				echo "</table>";
			}
		?>
</table>
<div class="footer">
 <div class="left">
   <p class="footer">dibuat oleh:</p><br />
   <p class="footer"><b>(..........................)</b></p>
 </div> 
 <div class="Right">
   <p class="footer">Menyetujui:</p><br />
   <p class="footer"><b>(..........................)</b></p>
 
 </div>
 
</div>
</center>













<form>
<input  type="button" value="Print this page" onClick="window.print()">
</form>