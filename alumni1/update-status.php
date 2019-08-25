<?php
include "koneksi.php";
$kodestatus = $_POST['txtKodeStatus'];
$status = $_POST['txtStatus'];
$SQL = mysql_query("UPDATE status SET status='$status' WHERE id_status='$kodestatus'") or die(mysql_error());
if ($SQL) {
	header('location:status.php');
}
?>