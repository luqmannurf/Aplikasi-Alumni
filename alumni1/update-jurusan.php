<?php
include "koneksi.php";
$kodejurusan = $_POST['txtKodeJurusan'];
$jurusan = $_POST['txtJurusan'];
$SQL = mysql_query("UPDATE t_jurusan SET jurusan='$jurusan' WHERE jurusanid='$kodejurusan'") or die(mysql_error());
if ($SQL) {
	header('location:data-jurusan.php');
}
?>