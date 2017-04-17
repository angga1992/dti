<style type="text/css">
div.margin
 {
 width:1000;
 height:1800;
 }
table
 {
  width:1000;
 }
 
td
 {
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:13px;
 text-transform:;
 border:1px solid #666666;
 }

thead
 {
  font-weight:bold;
 }
 
div.head
 {
  width:780px;
  height:50px;
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
  font-size:17px;
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
<div class="margin">
<center><img src='../asset/LOGO2.png' /></center>
<center>____________________________________________________________________________________________________</center>
<br>
<br>
<center>
 <table>
<!-- event-->
		<?php 				
				include("koneksi.php");
				
				$id_event=$_GET['id'];	
				$query = mysql_query("SELECT * FROM tb_event where id_event = '$id_event'");
				echo "<table border='1'>";
				echo "<tr>
					  <th>Nama Event</th>
					  <th>Instansi</th>
					  <th>Segmen</th>
					  <th>Tanggal mulai</th>
					  <th>tanggal akhir</th>
					  <th>tempat</th>
					  <th>Kota</th>
					  <th>jumlah peserta</th>
					  <th>Fasilitas</th>
					  <th>Kategori</th>
					  </tr>
					  ";
				//$val = mysql_fetch_array($query);
		?>
		
		<?php
				$row = mysql_fetch_array($query)			
		?>		
				<tr>
					
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
				
				echo "</table>";
		?>
		</BR>
<b>PANITIA</b>
<!-- kepanitiaan-->		
		</BR>
		</BR>
				<?php
				
				include("koneksi.php");
				
				
				$query = mysql_query("SELECT * FROM tb_event natural join kepanitian  where id_event = '$id_event'");
				echo "<table  border='1'>";
				echo "<tr>
		
					  <th>Nama Panitia</th>
					  <th>Tugas</th>					  
					</tr>
					";
				?>
				<?php
				while($row = mysql_fetch_array($query)){				
				?>	
				<tr>
				<td><?php echo $row['nama'];?></td>	
				<td><?php echo $row['tugas'];?></td>	
				</tr>
				<?php	
				}
				echo "</table>";
				?>
			<!--pemateri-->	
			</br>
				<b>Pemateri</b>
				</BR>
				<?php
				$query = mysql_query("SELECT * FROM tb_event  natural join tb_jadwal_materi where id_event = '$id_event'");
				echo "<table border='1'>";
				echo "<tr>
					  <th>Nama Pemateri</th>
					  <th>Judul materi</th>
					</tr>
					";
				?>
				<?php
				while($row = mysql_fetch_array($query)){				
				?>	
				<tr>
				<td><?php echo $row['nama_pemateri'];?></td>	
				<td><?php echo $row['judul_materi'];?></td>	
				</tr>
				<?php	
				}
				echo "</table>";
				?>
				
				</br>
<!--KEUANGAN -->
<b>Keuangan dan Evaluasi</b>				
				</BR>
				</BR>
				<?php
				
				include("koneksi.php");
				
				
				$query = mysql_query("SELECT * FROM tb_event natural join keuangan  where id_event = '$id_event'");
				echo "<table border='1'>";
				echo "<tr>
					  <th>Nilai Proyek</th>
					  <th>Total Biaya</th>					  
					  <th>Proyeksi Laba</th>					  
					  <th>HPP Event</th>					  
					  <th>Ev Pelaksanaan</th>					  
					  <th>Ev Panitia</th>					  
					  <th>Ev Pemateri</th>					  
					</tr>
					";
				?>
				<?php
				
				while($row = mysql_fetch_array($query)){				
				?>	
				<tr>
				<td>Rp <?php $uang=number_format ("$row[nilai_proyek]",0,",","."); echo "$uang" ?>,-</td>	
				<td>Rp <?php $uang=number_format ("$row[total_biaya]",0,",","."); echo "$uang"?>,-</td>	
				<td>Rp <?php $uang=number_format ("$row[proyeksi_laba]",0,",","."); echo "$uang"?>,-</td>	
				<td><?php echo $row['hpp_event'];?> % </td>	
				<td><?php echo $row['ev_pelaksanaan'];?> %</td>	
				<td><?php echo $row['ev_panitia'];?> %</td>	
				<td><?php echo $row['ev_pemateri'];?> %</td>	
				</tr>
				<?php	
				}
				echo "</table>";
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
<?php
	include "printah.php";
?>
</div>










