<?php 
include "koneksi.php";
$nis = $_GET['id'];
$SQLGambar = mysql_query("SELECT scan_ijazah, scan_transkrip_nilai_1, scan_transkrip_nilai_2, photo FROM t_alumni WHERE nis = '$nis'");
$dataGambar=mysql_fetch_array($SQLGambar);
if (file_exists("file-alumni".'/'.$dataGambar['scan_ijazah'])) unlink("file-alumni".'/'.$dataGambar['scan_ijazah']);
if (file_exists("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_1'])) unlink("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_1']);
if (file_exists("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_2'])) unlink("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_2']);
if (file_exists("file-alumni".'/'.$dataGambar['photo'])) unlink("file-alumni".'/'.$dataGambar['photo']);
$SQL = mysql_query("DELETE FROM t_alumni WHERE nis = '$nis'") or die(mysql_error());
if ($SQL) {
	header('location:data-alumni.php');
}

?>