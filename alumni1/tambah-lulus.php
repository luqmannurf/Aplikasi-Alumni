<?php include "header.php"; ?>
<?php include "menu.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Kelulusan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Kelulusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="setup-lulus.php" name="input" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Ijazah</label>
                                            <input class="form-control" name="txtkodeijazah" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Ijazah</label>
                                            <input class="form-control" name="txtnomorijazah" type="text" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Tahun Lulus</label>
                                            <input class="form-control" name="txttahunlulus" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Scan Ijazah</label>
                                            <input type="file" name="txtscanijazah" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
</body>
</html>