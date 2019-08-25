<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<script type="text/javascript">
function validasi_input(form) {	
if (form.cboNPM.value =="0") {
		alert("Anda belum memilih NIS");
		return (false);
	}
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
                    <h1 class="page-header">Tambah Data Status Alumni</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Status Alumni
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="setup-pekerjaan.php" name="frmSetupPekerjaan" method="post" onsubmit="return validasi_input(this)">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="txtnama" type="text">
                                        </div>
										<div class="form-group">
                                            <label>NIS</label>
                                            <?php
											include ("koneksi.php");
											echo '<select name="cbonis" class="form-control">';
											$SQL = mysql_query("SELECT * FROM t_alumni ORDER BY nis");	            
											  echo '<option value="0">--Pilih--</option>';
											  while($tampilNIS = mysql_fetch_array($SQL)) {
											  echo '<option value='.$tampilNIS['nis'].'>'.$tampilNIS['nis'].'</option>';
											  }
											echo '</select>';
											?>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                             <?php
											include ("koneksi.php");
											echo '<select name="cbostatus" class="form-control">';
											$SQL = mysql_query("SELECT * FROM status ORDER BY status");	            
											  echo '<option value="0">--Pilih--</option>';
											  while($tampilStatus = mysql_fetch_array($SQL)) {
											  echo '<option value='.$tampilStatus['status'].'>'.$tampilStatus['status'].'</option>';
											  }
											echo '</select>';
											?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input class="form-control" name="txtNamaPerusahaan" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <textarea class="form-control" rows="3" name="txtAlamatPerusahaan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Universitas</label>
                                            <input class="form-control" name="txtnamauniv" type="text">
											<div class="form-group">
                                            <label>Alamat Universitas</label>
                                            <input class="form-control" name="txtalamatuniv" type="text">
                                        </div>
                                        </div>
                                      
                                        <br>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#dtTanggalMasuk").datepicker();
            });
        </script>
</body>
</html>