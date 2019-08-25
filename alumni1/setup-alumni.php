<?php
include "koneksi.php";
$nis = $_POST['txtnis'];
$nama = $_POST['txtNama'];
$jurusanid = $_POST['cbojurusan'];
$alamat = $_POST['txtAlamat'];
$tahun_lulus = $_POST['txttahunlulus'];
$noTelepon = $_POST['txtTelepon'];
$email = $_POST['txtEmail'];

$scanIjazah = $_POST['txtnis'].'_'.$_FILES['txtScanIjazah']['name'];
if (strlen($scanIjazah)>0) {
		if (is_uploaded_file($_FILES['txtScanIjazah']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanIjazah']['tmp_name'], "file-alumni/".$scanIjazah);
		}
	}
	
$scanTranskrip1 = $_POST['txtnis'].'_'.$_FILES['txtScanTranskrip1']['name'];
if (strlen($scanTranskrip1)>0) {
		if (is_uploaded_file($_FILES['txtScanTranskrip1']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanTranskrip1']['tmp_name'], "file-alumni/".$scanTranskrip1);
		}
	}

$scanTranskrip2 = $_POST['txtnis'].'_'.$_FILES['txtScanTranskrip2']['name'];
if (strlen($scanTranskrip2)>0) {
		if (is_uploaded_file($_FILES['txtScanTranskrip2']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanTranskrip2']['tmp_name'], "file-alumni/".$scanTranskrip2);
		}
	}
	
$foto = $_POST['txtnis'].'_'.$_FILES['txtFoto']['name'];
if (strlen($foto)>0) {
		if (is_uploaded_file($_FILES['txtFoto']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtFoto']['tmp_name'], "file-alumni/".$foto);
		}
	}



$SQL = mysql_query("INSERT INTO t_alumni VALUES('$nis', '$nama', '$jurusanid', '$alamat', '$tahun_lulus', '$noTelepon', '$email', '$scanIjazah', '$scanTranskrip1', '$scanTranskrip2', '$foto')") or die(mysql_error());
if ($SQL) {
	header('location:data-alumni.php');
}
?>