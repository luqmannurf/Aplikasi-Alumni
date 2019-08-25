<?php 
include "koneksi.php";
$nis = $_GET['id'];
$SQL = mysql_query("DELETE FROM t_status WHERE nis = '$nis'") or die(mysql_error());
if ($SQL) {
	header('location:data-pekerjaan.php');
}
?>