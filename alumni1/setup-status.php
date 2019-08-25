<?php
include "koneksi.php";
$txtid_status = $_POST['txtKodeStatus'];
$txtStatus = $_POST['txtStatus'];
$SQL = mysql_query("INSERT INTO status VALUES('$txtid_status','$txtStatus')") or die(mysql_error());
if ($SQL) {
	header('location:status.php');
}
?>