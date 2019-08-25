<?php
include "koneksi.php";
$txtjurusanid = $_POST['txtKodeJurusan'];
$txtJurusan = $_POST['txtJurusan'];
$SQL = mysql_query("INSERT INTO t_jurusan VALUES('$txtjurusanid','$txtJurusan')") or die(mysql_error());
if ($SQL) {
	header('location:data-jurusan.php');
}
?>