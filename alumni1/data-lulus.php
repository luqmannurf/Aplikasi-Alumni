<?php include "header.php"; ?>
<?php include "menu.php"; ?>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kelulusan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Ijazah</th>
                                            <th>Nomor Ijazah</th>
                                            <th>Tahun Lulus</th>
                                            <th>Scan Ijazah</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
										$SQL=mysql_query("SELECT * FROM t_kelulusan");
										while ($data=mysql_fetch_array($SQL)) { ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $data['kd_ijazah']; ?></td>
                                            <td class="center"><?php echo $data['no_ijazah']; ?></td>
                                            <td class="center"><?php echo $data['tahun_lulus']; ?></td>
                                            <td class="center"><?php echo $data['scan_ijazah']; ?></td>
                                            <td class="center">
									<a href="ubah-lulus.php?id=<?php echo $data['kd_ijazah']; ?>"><span class="glyphicon glyphicon-pencil" title="Ubah"></a>&nbsp;&nbsp;
									<a href="javascript:if(confirm('Hapus Nomor Ijazah <?php echo $data['no_ijazah']; ?>??')) { document.location='hapus-lulus.php?id=<?php echo $data['kd_ijazah']; ?>'; }"><span class="glyphicon glyphicon-trash" title="Hapus"></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="well">
                                <h4><a href="tambah-lulus.php"><button type="submit" class="btn btn-success">Tambah</button></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/sb-admin.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</body>
</html>
