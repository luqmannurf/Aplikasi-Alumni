<?php 
include "koneksi.php";
$kodejurusan = $_GET['id'];
$SQL = mysql_query("DELETE FROM t_jurusan WHERE jurusanid = '$kodejurusan'") or die(mysql_error());
if ($SQL) {
	header('location:data-jurusan.php');
}
?>