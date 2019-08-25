<?php include "header.php"; ?>
<?php include "menu.php"; ?>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Status Alumni</h1>
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
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Nama PT</th>
                                            <th>Alamat PT</th>
                                            <th>Nama Universitas</th>
                                            <th>Alamat Universitas</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$SQL=mysql_query("SELECT t_status.nis,
										  t_alumni.nama,
										  t_status.status,
										  t_status.nama_pt,
										  t_status.alamat_pt,
										  t_status.nama_univ,
										  t_status.alamat_univ
										FROM t_status
										  INNER JOIN t_alumni ON t_alumni.nis = t_status.nis");
											while ($data = mysql_fetch_array($SQL)) {
												?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $data['nis']; ?></td>
                                            <td class="center"><?php echo $data['nama']; ?></td>
                                            <td class="center"><?php echo $data['status']; ?></td>
                                            <td class="center"><?php echo $data['nama_pt']; ?></td>
                                            <td class="center"><?php echo $data['alamat_pt']; ?></td>
                                            <td class="center"><?php echo $data['nama_univ']; ?></td>
                                            <td class="center"><?php echo $data['alamat_univ']; ?></td>
                                            <td class="center">
							<a href="ubah-pekerjaan.php?id=<?php echo $data['nis']; ?>"><span class="glyphicon glyphicon-pencil" title="Ubah"></a>&nbsp;&nbsp;
							<a href="javascript:if(confirm('Hapus NIS <?php echo $data['nis']; ?> atas status <?php echo $data['nama_univ']; ?>??')) { document.location='hapus-pekerjaan.php?id=<?php echo $data['nis']; ?>'; }"><span class="glyphicon glyphicon-trash" title="Hapus"></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="well">
								<h4><a href="tambah-pekerjaan.php"><button type="submit" class="btn btn-success">Tambah</button></a></h4>
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
