<?php
include "user_cek.php";
include "config.php";

$nama_pegawai= isset($_POST['nama_pegawai']) ? $_POST['nama_pegawai'] : '';
$periode_penilaian_from = isset($_POST['periode_penilaian_from']) ? $_POST['periode_penilaian_from'] : '';
$periode_penilaian_to = isset($_POST['periode_penilaian_to']) ? $_POST['periode_penilaian_to'] : '';
$target = isset($_POST['target']) ? $_POST['target'] : '';
$realisasi = isset($_POST['realisasi']) ? $_POST['realisasi'] : '';
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';

	$sql = "INSERT INTO tab_kinerja (id,id_pegawai,periode_penilaian_from,periode_penilaian_to,target,realisasi,keterangan,user_insert,date_insert)
		VALUES (null,'$nama_pegawai','$periode_penilaian_from','$periode_penilaian_to','$target','$realisasi','$keterangan','$_SESSION[username]',now())";
	
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menambah Data');
	      window.location='master_kinerja_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menambah Data');
	      window.location='master_kinerja_add.php';
	      </script>";
}
?>