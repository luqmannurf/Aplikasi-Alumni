<?php
include "koneksi.php";
$kodeijazah = $_POST['txtkodeijazah'];
$nomorijazah = $_POST['txtnomorijazah'];
$tahunlulus = $_POST['txttahunlulus'];
$scanijazah = $_POST['txtkodeijazah'].'_'.$_FILES['txtscanijazah']['name'];
if (strlen($scanSK)>0) {
		if (is_uploaded_file($_FILES['txtscanijazah']['tmp_name'])) {
			move_uploaded_file ($_FILES['txtscanijazah']['tmp_name'], "file-alumni/".$scanijazah);
		}
	}
$SQL = mysql_query("INSERT INTO t_kelulusan VALUES('$kodeijazah', '$nomorijazah','$tahunlulus', '$scanijazah')") or die(mysql_error());
if ($SQL) {
	header('location:data-lulus.php');
}
?>