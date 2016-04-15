<?php
include "config.php";
include "user_cek.php";

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : '';
$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';

$sql = "update tab_pegawai set nama = '$nama', tanggal_masuk = '$tanggal_masuk', tempat_lahir = '$tempat_lahir',
		tanggal_lahir = '$tanggal_lahir', gender = '$gender', alamat = '$alamat', id_jabatan = '$jabatan', 
		email = '$email', no_telp = '$no_telp' where id = '$id'";

 

$exsql = mysql_query($sql);
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Merubah Data');
	      window.location='master_pegawai_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Merubah Data');
	      window.location='master_pegawai_add.php';
	      </script>";
}
?>