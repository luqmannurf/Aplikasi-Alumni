<?php
include "koneksi.php";
$nama = $_POST['txtnama'];
$nis = $_POST['txtNIS'];
$status = $_POST['cboStatus'];
$namaPerusahaan = $_POST['txtNamaPerusahaan'];
$alamatPerusahaan = $_POST['txtAlamatPerusahaan'];
$namauniv = $_POST['txtnamauniv'];
$alamatuniv = $_POST['txtalamatuniv'];

$SQL = mysql_query("UPDATE t_status SET nama='$nama', status='$status', nama_pt='$namaPerusahaan', alamat_pt='$alamatPerusahaan', nama_univ='$namauniv',
alamat_univ='$alamatuniv' WHERE nis='$nis'") or die(mysql_error());
if ($SQL) {
	header('location:data-pekerjaan.php');
}
?>