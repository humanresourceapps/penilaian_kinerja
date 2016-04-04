<?php
include "config.php";

$username = isset($_POST['username']) ? $_REQUEST['username'] : '';
$password  = isset($_POST['password']) ? $_REQUEST['password'] : '';
$hashpassword = md5($password);

$sql = "select * from tab_user where username = '$username' AND password = '$hashpassword'";
 
$exsql = mysql_query($sql);

$data = mysql_fetch_array($exsql);
$avail = mysql_num_rows($exsql);

if($avail > 0){
	session_start();
	$_SESSION['username'] = $data['username'];
	header('location:dashboard.php');
}else{
	header('location:index.php');
}
?>