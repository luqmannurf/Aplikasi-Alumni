<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Data Kelulusan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Kelulusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
								$kodeKelulusan=$_GET['id'];
								$SQL=mysql_query("SELECT * FROM t_kelulusan WHERE kd_ijazah='$kodeKelulusan';");
								$data=mysql_fetch_array($SQL);
								$scanijazah=$data['scan_ijazah'];
								?>
                                    <form action="update-lulus.php" name="input" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Ijazah</label>
                                            <input class="form-control" name="txtKodeIjazah" type="text" required value="<?php echo $data['kd_ijazah']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Ijazah</label>
                                            <input class="form-control" name="txtNomorIjazah" type="text" required value="<?php echo $data['no_ijazah']; ?>">
                                        </div>
                                        <div class="control-group">
                						<label class="control-label" for="txtTahunLulus">Tahun Lulus</label>
                						<div class="controls">
                   						<input id="txtTahunLulus" type="text" class="form-control" name="txtTahunLulus" value="<?php echo $data['tahun_lulus']; ?>">
                						</div>
            							</div>
                                        <br>
                                        <div class="form-group">
                                            <label>Scan Ijazah</label>
                                            <input type="file" name="txtscanijazah"><br>
                                            <a href="file-alumni/<?php echo $scanijazah; ?>" class="lightview">
                                            <img src="file-alumni/<?php echo $scanijazah; ?>" width="180" height="180"/></a>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="data-lulus.php" class="btn btn-default">Batal</a>
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
    <link rel="stylesheet" type="text/css" href="css/lightview/lightview.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/spinners/spinners.min.js"></script>
    <script type="text/javascript" src="js/lightview/lightview.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
</body>
</html>