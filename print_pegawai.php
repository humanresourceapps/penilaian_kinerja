<?php

ob_start();
include "config.php";
 ?>

 <page> 
 <h2 align="center">Laporan Data Pegawai</h2>
 <br>
 
 <?php
     $id = $_GET['id'];
	  
     $sqluser = "select a.*,b.nama_jabatan from tab_pegawai a
                 left join tab_jabatan b on b.id = a.id_jabatan
                 where a.id = '$id'";
		 $exsqluser = mysql_query($sqluser);
		 $row = mysql_fetch_array($exsqluser);
		 
	  
?>
 
 <table width="100%" border="1" cellpadding="3" cellspacing="0">
 	 
 	<tr>
 	  <td style="width:80%;">Nama</td>
 	  <td>:</td>
 	  <td><?php echo $row['nama']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Tanggal Masuk</td>
    <td>:</td>
    <td><?php echo $row['tanggal_masuk']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Tempat Lahir</td>
    <td>:</td>
    <td><?php echo $row['tempat_lahir']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $row['tanggal_lahir']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Gender</td>
    <td>:</td>
    <td><?php echo $row['gender']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Alamat</td>
    <td>:</td>
    <td><?php echo $row['alamat']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Jabatan</td>
    <td>:</td>
    <td><?php echo $row['nama_jabatan']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Email</td>
    <td>:</td>
    <td><?php echo $row['email']; ?></td>
  </tr>
  <tr>
    <td style="width:80%;">Telp</td>
    <td>:</td>
    <td><?php echo $row['no_telp']; ?></td>
  </tr>
 
 	  
 </table>
   
 </page>
 
<?php
$content = ob_get_clean();
require ('/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P', 'A4', 'en','true','UTF-8');
$pdf->writeHTML($content);
$pdf->Output('laporan_pegawai.pdf');
 

 ?>