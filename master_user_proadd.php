<?php
include "user_cek.php";
include "config.php";

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$hashpass = md5($password);
$nama_pegawai = isset($_POST['nama_pegawai']) ? $_POST['nama_pegawai'] : '';
$level = isset($_POST['level']) ? $_POST['level'] : '';
 

 $sql = "INSERT INTO tab_user (id,id_pegawai,username,password,level,user_insert,date_insert)
		VALUES (null,'$nama_pegawai','$username','$hashpass','$level','$_SESSION[username]',now())";
		
$exsql = mysql_query($sql);
 
if($exsql == TRUE){
  	echo "<script language=javascript>
	      alert('Berhasil Menambah Data');
	      window.location='master_user_view.php';
	      </script>";
}else{
  	echo "<script language=javascript>
	      alert('Gagal Menambah Data');
	      window.location='master_user_add.php';
	      </script>";
}
?>