<?php
//fungsi konek mysql  
/*
localhost = nama server
root = username server
kosong = password server
*/
$conn = mysql_connect("localhost","root","");
//milih database
$db = mysql_select_db("penilaian_karyawan",$conn);

if(!$conn OR !$db){
	echo "database not exist or connection_aborted";
	exit();
}


?>