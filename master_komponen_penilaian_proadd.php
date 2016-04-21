<?php
include "user_cek.php";
include "config.php";

$nama_aspek_penilaian = isset($_POST['nama_aspek_penilaian']) ? $_POST['nama_aspek_penilaian'] : '';
$user_insert = isset($_POST['user_insert']) ? $_POST['user_insert'] : '';
$date_insert = isset($_POST['date_insert']) ? $_POST['date_insert'] : '';


 $sql = "INSERT INTO tab_komponen_penilaian (nama_aspek_penilaian,user_insert,date_insert)
		VALUES ('$nama_aspek_penilaian','$_SESSION[username]',now())";
		
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menambah Data');
	      window.location='master_komponen_penilaian_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menambah Data');
	      window.location='master_komponen_penilaian_add.php';
	      </script>";
}
?>