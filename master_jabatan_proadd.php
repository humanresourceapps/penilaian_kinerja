<?php
include "user_cek.php";
include "config.php";

$nama_jabatan = isset($_POST['nama_aspek_penilaian']) ? $_POST['nama_aspek_penilaian'] : '';
$user_insert = isset($_POST['user_insert']) ? $_POST['user_insert'] : '';
$date_insert = isset($_POST['date_insert']) ? $_POST['date_insert'] : '';


 $sql = "INSERT INTO tab_jabatan (nama_aspek_penilaian,user_insert,date_insert)
		VALUES ('$nama_jabatan','$_SESSION[username]',now())";
		
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menambah Data');
	      window.location='master_jabatan_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menambah Data');
	      window.location='master_jabatan_add.php';
	      </script>";
}
?>