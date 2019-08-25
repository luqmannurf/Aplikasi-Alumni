<?php 
include "koneksi.php";
$kodeijazah = $_GET['id'];
$SQLGambar = mysql_query("SELECT scan_ijazah FROM t_kelulusan WHERE kd_ijazah = '$kodeijazah'");
$dataGambar=mysql_fetch_array($SQLGambar);
if (file_exists("file-alumni".'/'.$dataGambar['scan_ijazah'])) unlink("file-alumni".'/'.$dataGambar['scan_ijazah']);
$SQL = mysql_query("DELETE FROM t_kelulusan WHERE kd_ijazah = '$kodeijazah'") or die(mysql_error());
if ($SQL) {
	header('location:data-lulus.php');
}

?>