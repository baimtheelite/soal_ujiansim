<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_portalpw1";

$conn = mysqli_connect($host, $user, $pass);

if($conn){
	$pilihdb = mysql_select_db($db);
	if(!$pilihdb){
		die("pemilihan database gagal".mysql_error());
	}
}else{
	die("koneksi gagal. ".mysql_error());
}
?>