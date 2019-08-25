<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<script type="text/javascript">
function validasi_input(form) {	
	if (form.cboStatus.value =="0") {
		alert("Anda belum memilih status");
		return (false);
	}
		return (true);
}
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Status Alumni</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Status Alumni
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
								$nis=$_GET['id'];
								$SQL=mysql_query("SELECT * FROM t_status WHERE nis='$nis'");
								$data=mysql_fetch_array($SQL);
								?>
                                    <form role="form" action="update-pekerjaan.php" name="frmUpdatePekerjaan" method="post" onsubmit="return validasi_input(this)">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="txtnama" type="text" required value="<?php echo $data['nama']; ?>">
                                        </div>
										<div class="form-group">
                                            <label>NIS</label>
                                            <input class="form-control" name="txtNIS" type="text" required value="<?php echo $data['nis']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="cboStatus">
                                            <option value="0">--Pilih--</option>
                                                <option value="Bekerja">Kerja</option>
                                                <option value="Kuliah">Kuliah</option>
												<?php echo $data['status']; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input class="form-control" name="txtNamaPerusahaan" type="text" value="<?php echo $data['nama_pt']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <textarea class="form-control" rows="3" name="txtAlamatPerusahaan"><?php echo $data['alamat_pt']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Universitas</label>
                                            <input class="form-control" name="txtnamauniv" type="text" value="<?php echo $data['nama_univ']; ?>">
                                        </div>
                                       <div class="form-group">
                                            <label>Alamat Universitas</label>
                                            <input class="form-control" name="txtalamatuniv" type="text" value="<?php echo $data['alamat_univ']; ?>">
                                        </div>
                                        <br>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="data-pekerjaan.php" class="btn btn-default">Batal</a>
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
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#dtTanggalMasuk").datepicker();
            });
        </script>
</body>
</html>