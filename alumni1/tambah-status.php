<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Status</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Status
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="setup-Status.php" name="frmSetupStatus" method="post">
                                        <div class="form-group">
                                            <label>Kode Status</label>
                                            <input class="form-control" name="txtKodeStatus" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" name="txtStatus" type="text" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="status.php" class="btn btn-default">Batal</a>
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