<?php
include "koneksi.php";
$kodeijazah = $_POST['txtKodeIjazah'];
$noijazah = $_POST['txtNomorIjazah'];
$tahunlulus = $_POST['txtTahunLulus'];
$scanijazah = $_POST['txtscanijazah'];

#SQL untuk proses hapus gambar dalam folder
$SQLGambar = mysql_query("SELECT scan_ijazah FROM t_kelulusan WHERE kd_ijazah = '$KodeIjazah'");
$dataGambar=mysql_fetch_array($SQLGambar);
###################################################################################
$scanijazah = $_POST['txtKodeIjazah'].'_'.$_FILES['txtscanijazah']['name'];
if (strlen($scanijazah)>0) {
		if (is_uploaded_file($_FILES['txtscanijazah']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtscanijazah']['tmp_name'], "file-alumni/".$scanijazah);
			if (empty($scanijazah)) { //jika gambar kosong atau tidak di ganti
				mysql_query ("UPDATE t_kelulusan SET scan_ijazah='$scanijazah' WHERE kd_ijazah='$KodeIjazah'");
			} elseif (!empty($scanijazah)) { //jika gambar di ganti
				if (file_exists("file-alumni".'/'.$dataGambar['scan_ijazah'])) unlink("file-alumni".'/'.$dataGambar['scan_ijazah']);
				mysql_query("UPDATE t_kelulusan SET no_ijazah='$noijazah', tahun_lulus='$tahunlulus', scan_ijazah='$scanijazah' WHERE kd_ijazah='$kodeijazah'");
			}
		}
	}
header('location:data-lulus.php');
?>