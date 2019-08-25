<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<script type="text/javascript">
function validasi_input(form) {	
	if (form.cboJurusan.value =="0") {
		alert("Anda belum memilih Jurusan");
		return (false);
	}
		if (form.cboKodeSK.value =="0") {
		alert("Anda belum memilih Nomor Ijazah");
		return (false);
	}
		return (true);
}
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Alumni</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Alumni
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
						<form role="form" action="setup-alumni.php" name="frmSetupAlumni" method="post" enctype="multipart/form-data"   onsubmit="return validasi_input(this)">
                                        <div class="form-group">
                                            <label>NIS</label>
                                            <input class="form-control" name="txtnis" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="txtNama" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <?php
											include ("koneksi.php");
											echo '<select name="cbojurusan" class="form-control">';
											$SQL = mysql_query("SELECT * FROM t_jurusan ORDER BY jurusanid");	            
											  echo '<option value="0">--Pilih--</option>';
											  while($tampilJurusan = mysql_fetch_array($SQL)) {
											  echo '<option value='.$tampilJurusan['jurusanid'].'>'.$tampilJurusan['jurusan'].'</option>';
											  }
											echo '</select>';
											?>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" name="txtAlamat" required></textarea>
                                        </div>
                                        <div class="control-group">
                						<label class="control-label" for="txttahunlulus">Tahun Lulus</label>
                						<div class="controls">
                   						<input id="txttahunlulus" type="text" class="form-control" name="txttahunlulus" required>
                						</div>
            							</div>
                                        <br>
                                        <div class="form-group">
                                            <label>No Telepon/HP</label>
                                            <input class="form-control" name="txtTelepon" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="txtEmail" type="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Scan Ijazah</label>
                                            <input type="file" name="txtScanIjazah" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Scan Transkrip Nilai (Lembar 1)</label>
                                            <input type="file" name="txtScanTranskrip1" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Scan Transkrip Nilai (Lembar 2)</label>
                                            <input type="file" name="txtScanTranskrip2" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="txtFoto" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="data-alumni.php" class="btn btn-default">Batal</a>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
</body>
</html>