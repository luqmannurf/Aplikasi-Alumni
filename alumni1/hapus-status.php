<?php 
include "koneksi.php";
$kodestatus = $_GET['id'];
$SQL = mysql_query("DELETE FROM status WHERE id_status = '$kodestatus'") or die(mysql_error());
if ($SQL) {
	header('location:status.php');
}
?>