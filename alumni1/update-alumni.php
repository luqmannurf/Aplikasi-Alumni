<?php
include "koneksi.php";
$nis = $_POST['txtnis'];
$nama = $_POST['txtNama'];
$jurusan = $_POST['cbojurusan'];
$alamat = $_POST['txtAlamat'];
$tahunlulus = $_POST['txttahunlulus'];
$noTelepon = $_POST['txtTelepon'];
$email = $_POST['txtEmail'];

#SQL untuk proses hapus gambar dalam folder
$SQLGambar = mysql_query("SELECT scan_ijazah, scan_transkrip_nilai_1, scan_transkrip_nilai_2, photo FROM t_alumni WHERE nis = '$nis'");
$dataGambar=mysql_fetch_array($SQLGambar);
###################################################################################
$scanIjazah = $_POST['txtnis'].'_'.$_FILES['txtScanIjazah']['name'];
if (strlen($scanIjazah)>0) {
		if (is_uploaded_file($_FILES['txtScanIjazah']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanIjazah']['tmp_name'], "file-alumni/".$scanIjazah);
			if (empty($scanIjazah)) { //jika gambar kosong atau tidak di ganti
				mysql_query ("UPDATE t_alumni SET scan_ijazah='$scanIjazah' WHERE nis='$nis'");
			} elseif (!empty($scanIjazah)) { //jika gambar di ganti
				if (file_exists("file-alumni".'/'.$dataGambar['scan_ijazah'])) unlink("file-alumni".'/'.$dataGambar['scan_ijazah']);
				mysql_query("UPDATE t_alumni SET scan_ijazah='$scanIjazah' WHERE nis='$nis'");
			}
		}
	}
	
$scanTranskripNilai1 = $_POST['txtnis'].'_'.$_FILES['txtScanTranskrip1']['name'];
if (strlen($scanTranskripNilai1)>0) {
		if (is_uploaded_file($_FILES['txtScanTranskrip1']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanTranskrip1']['tmp_name'], "file-alumni/".$scanTranskripNilai1);
			if (empty($scanTranskripNilai1)) { //jika gambar kosong atau tidak di ganti
				mysql_query ("UPDATE t_alumni SET scan_transkrip_nilai_1='$scanTranskripNilai1' WHERE nis='$nis'");
			} elseif (!empty($scanTranskripNilai1)) { //jika gambar di ganti
				if (file_exists("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_1'])) unlink("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_1']);
				mysql_query("UPDATE t_alumni SET scan_transkrip_nilai_1='$scanTranskripNilai1' WHERE nis='$nis'");
			}
		}
	}
	
$scanTranskripNilai2 = $_POST['txtnis'].'_'.$_FILES['txtScanTranskrip2']['name'];
if (strlen($scanTranskripNilai2)>0) {
		if (is_uploaded_file($_FILES['txtScanTranskrip2']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtScanTranskrip2']['tmp_name'], "file-alumni/".$scanTranskripNilai2);
			if (empty($scanTranskripNilai2)) { //jika gambar kosong atau tidak di ganti
				mysql_query ("UPDATE t_alumni SET scan_transkrip_nilai_2='$scanTranskripNilai2' WHERE nis='$nis'");
			} elseif (!empty($scanTranskripNilai2)) { //jika gambar di ganti
				if (file_exists("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_2'])) unlink("file-alumni".'/'.$dataGambar['scan_transkrip_nilai_2']);
				mysql_query("UPDATE t_alumni SET scan_transkrip_nilai_2='$scanTranskripNilai2' WHERE nis='$nis'");
			}
		}
	}
	
$foto = $_POST['txtnis'].'_'.$_FILES['txtFoto']['name'];
if (strlen($foto)>0) {
		if (is_uploaded_file($_FILES['txtFoto']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtFoto']['tmp_name'], "file-alumni/".$foto);
			if (empty($foto)) { //jika gambar kosong atau tidak di ganti
				mysql_query ("UPDATE t_alumni SET photo='$foto' WHERE nis='$nis'");
			} elseif (!empty($foto)) { //jika gambar di ganti
				if (file_exists("file-alumni".'/'.$dataGambar['photo'])) unlink("file-alumni".'/'.$dataGambar['photo']);
				mysql_query("UPDATE t_alumni SET photo='$foto' WHERE nis='$nis'");
			}
		}
	}
mysql_query("UPDATE t_alumni SET nama='$nama', jurusanID='$jurusan', alamat='$alamat', tahun_lulus='$tahunlulus', no_hp='$noTelepon', email='$email' WHERE nis='$nis'");
header('location:data-alumni.php');
?>