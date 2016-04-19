<?php
include "config.php";
include "user_cek.php";

$id = $_GET['id'];
$sql = "delete from tab_pegawai where id = '$id'";
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menghapus Data');
	      window.location='master_pegawai_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menghapus Data');
	      window.location='master_pegawai_add.php';
	      </script>";
}
?>