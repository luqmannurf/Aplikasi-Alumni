<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Status</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Status
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
								$kodestatus=$_GET['id'];
								$SQL=mysql_query("SELECT * FROM status WHERE id_status='$kodestatus'");
								$data=mysql_fetch_array($SQL);
								?>
                                    <form action="update-status.php" name="frmUpdateStatus" method="post">
                                        <div class="form-group">
                                            <label>Kode Status</label>
                                            <input class="form-control" name="txtKodeStatus" type="text" value="<?php echo $data['id_status']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" name="txtStatus" type="text" value="<?php echo $data['status']; ?>">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Update</button>
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