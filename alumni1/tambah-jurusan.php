<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Jurusan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Jurusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="setup-jurusan.php" name="frmSetupJurusan" method="post">
                                        <div class="form-group">
                                            <label>Kode Jurusan</label>
                                            <input class="form-control" name="txtKodeJurusan" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input class="form-control" name="txtJurusan" type="text" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="data-jurusan.php" class="btn btn-default">Batal</a>
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
</body>
</html>