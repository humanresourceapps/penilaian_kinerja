<?php
include "user_cek.php";
include "config.php";

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : '';
$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';

$sql = "INSERT INTO tab_pegawai (id,nama,tanggal_masuk,tempat_lahir,tanggal_lahir,gender,alamat,
								 id_jabatan,email,no_telp,data_available,user_insert,date_insert)
		VALUES (null,'$nama','$tanggal_masuk','$tempat_lahir','$tanggal_lahir','$gender','$alamat',
				'$jabatan','$email','$no_telp','Y','$_SESSION[username]',now())";
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menambah Data');
	      window.location='master_pegawai_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menambah Data');
	      window.location='master_pegawai_add.php';
	      </script>";
}
?>