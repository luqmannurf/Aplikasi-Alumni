<?php
include "koneksi.php";
$nama = $_POST['txtnama'];
$nis = $_POST['cbonis'];
$status = $_POST['cbostatus'];
$namaPerusahaan = $_POST['txtNamaPerusahaan'];
$alamatPerusahaan = $_POST['txtAlamatPerusahaan'];
$namauniv = $_POST['txtnamauniv'];
$alamatuniv = $_POST['txtalamatuniv'];
$cekNIS=mysql_num_rows(mysql_query("SELECT nis FROM t_status WHERE nis='$nis'"));
$cekSTATUS=mysql_num_rows(mysql_query("SELECT status FROM t_status WHERE status='$status'"));
$SQL = mysql_query("INSERT INTO t_status VALUES('$nama','$nis', '$status', '$namaPerusahaan', '$alamatPerusahaan', '$namauniv', '$alamatuniv')") or die(mysql_error());
if ($SQL) {
	header('location:data-pekerjaan.php');
}
?>