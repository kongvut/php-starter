<?php
session_start();
include_once "db_connect.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT user, pass FROM tbl_user WHERE user='$user';";
$res = $mysqli->query($sql);
$dbarr = $res->fetch_assoc();

if(!$user){
	echo 'ไม่ได้กรอก username';
	exit;
}else if(!$pass){
	echo 'ไม่ได้กรอก password';
	exit;
}
else if($dbarr['user'] != $user){
	echo 'ไม่มี user นี้ในระบบ';
	exit;
}
else if($dbarr['pass'] != $pass){
	echo 'Password ไม่ถูกต้อง';
	exit;
}
else if($dbarr['user'] == $user AND $dbarr['pass'] == $pass){
	$_SESSION["user"] = $user;
	echo '<META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin_panel.php">';
	exit;
}

?>