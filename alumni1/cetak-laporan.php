<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cetak Laporan Data Alumni</title>
<style type="text/css">
body
{
   margin: 0;
   padding: 0;
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<style type="text/css">
#Table1
{
   border: 0px #C0C0C0 none;
   background-color: transparent;
   border-spacing: 1px;
}
#Table1 td
{
   padding: 1px 1px 1px 1px;
}
#Table1 td div
{
   white-space: nowrap;
}
</style>
<link rel="shortcut icon" href="favicon.png">
</head>
<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>
<link rel="stylesheet" type="text/css" href="css/lightview/lightview.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/spinners/spinners.min.js"></script>
    <script type="text/javascript" src="js/lightview/lightview.js"></script>
<body>
<?php
include "koneksi.php";
$nis=$_GET['id'];
$sql=mysql_query("SELECT t_alumni.nis,
  t_alumni.nama,
  t_alumni.alamat,
  t_alumni.no_hp,
  t_status.status,
  t_status.nama_pt,
  t_status.alamat_pt,
  t_status.nama_univ,
  t_status.alamat_univ,
  t_jurusan.jurusan,
  t_alumni.photo,
  t_alumni.scan_transkrip_nilai_1,
  t_alumni.scan_transkrip_nilai_2,
  t_alumni.scan_ijazah,
  t_kelulusan.scan_ijazah,
  t_kelulusan.tahun_lulus
FROM t_alumni
  INNER JOIN t_status ON t_status.nis = t_alumni.nis
  INNER JOIN t_jurusan ON t_jurusan.jurusanID = t_alumni.jurusanID
  INNER JOIN t_kelulusan ON t_kelulusan.kd_ijazah WHERE t_alumni.nis=$nis");
  $data=mysql_fetch_array($sql);
  $foto=$data['photo'];
  $fileijazah=$data['scan_ijazah'];
  $fileTranskrip1=$data['scan_transkrip_nilai_1'];
  $fileTranskrip2=$data['scan_transkrip_nilai_2'];
?>
<p align="center"><a href="javascript:void(printSpecial())">Cetak</a></p>
<div id="printReady">
<table style="center:35px;top:10px;width:700px;height:934px;z-index:0;" cellpadding="1" cellspacing="1" id="Table1" align="center">
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:16px;">
</span>

</div>
</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>

<tr>
<td colspan="6" style="background-color:transparent;text-align:center;vertical-align:top;height:22px;"><img src="smile.png" width="200" height="200"></td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:center;vertical-align:top;height:63px;"><div><span style="color:#000000;font-family:Arial;font-size:16px;"><strong>LAPORAN SISTEM INFORMASI DATA ALUMNI</strong></span></div>
</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:25px;"><div><span style="color:#000000;font-family:Arial;font-size:16px;"><strong>DATA PRIBADI ALUMNI</strong></span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">NIS</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['nis'];?></td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Nama</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['nama'];?></td>
<td rowspan="6" style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">
<img src="file-alumni/<?php echo $foto; ?>" style="width:150px; height:150px;" class="img-thumbnail"></td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Alamat</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['alamat'];?></td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">No Telepon/HP</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['no_hp'];?></td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Jurusan</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['jurusan'];?></td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Tahun Lulus</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['tahun_lulus'];?></td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:44px;"><div><span style="color:#000000;font-family:Arial;font-size:16px;"><strong>DATA STATUS ALUMNI</strong></span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Nama Perusahaan</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['nama_pt'];?></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Alamat Perusahaan</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['alamat_pt'];?></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Status</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['status'];?></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Nama Universitas</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['nama_univ'];?></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Alamat Universitas</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;"><?php echo $data['alamat_univ'];?></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td colspan="6" style="background-color:transparent;text-align:left;vertical-align:top;height:25px;"><div><span style="color:#000000;font-family:Arial;font-size:16px;"><strong>DATA FILE ALUMNI</strong></span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Scan Transkrip Ijazah (Lembar 1)</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;">
<a href="file-alumni/<?php echo $fileTranskrip1; ?>" class="lightview">
<img src="file-alumni/<?php echo $fileTranskrip1;?>" border="2" style="width:100px; height:100px; border-color:#CCC;"/>
</a></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:211px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">Scan Transkrip Nilai (Lembar 2)</span></div>
</td>
<td style="background-color:transparent;text-align:left;vertical-align:top;width:2px;height:22px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">:</span></div>
</td>
<td colspan="3" style="background-color:transparent;text-align:left;vertical-align:top;height:22px;">
<a href="file-alumni/<?php echo $fileTranskrip2; ?>" class="lightview">
<img src="file-alumni/<?php echo $fileTranskrip2;?>" border="2" style="width:100px; height:100px; border-color:#CCC;"/>
</a></td>
<td style="background-color:transparent;text-align:center;vertical-align:top;height:22px;">&nbsp;</td>
</tr>
</table>
</div>
<br>
<br>
</body>
</html>