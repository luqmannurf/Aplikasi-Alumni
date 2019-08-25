<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Jurusan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Jurusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
								$kodejurusan=$_GET['id'];
								$SQL=mysql_query("SELECT * FROM t_jurusan WHERE jurusanid='$kodejurusan'");
								$data=mysql_fetch_array($SQL);
								?>
                                    <form action="update-jurusan.php" name="frmUpdateJurusan" method="post">
                                        <div class="form-group">
                                            <label>Kode Jurusan</label>
                                            <input class="form-control" name="txtKodeJurusan" type="text" value="<?php echo $data['jurusanid']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input class="form-control" name="txtJurusan" type="text" value="<?php echo $data['jurusan']; ?>">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Update</button>
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