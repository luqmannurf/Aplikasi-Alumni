<?php include "header.php"; ?>
<?php include "menu.php"; ?>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Alumni</h1>
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
                                            <th>Jurusan</th>
                                            <th>No HP</th>
                                            <th>Foto</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$SQL=mysql_query("SELECT t_alumni.nis,
										  t_alumni.nama,
										  t_jurusan.jurusan,
										  t_alumni.no_hp,
										  t_alumni.photo
										FROM t_alumni
										  INNER JOIN t_jurusan ON t_jurusan.jurusanid = t_alumni.jurusanID");
											while ($data = mysql_fetch_array($SQL)) {
												$foto=$data['photo'];
												?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $data['nis']; ?></td>
                                            <td class="center"><?php echo $data['nama']; ?></td>
                                            <td class="center"><?php echo $data['jurusan']; ?></td>
                                            <td class="center"><?php echo $data['no_hp']; ?></td>
                                            <td class="center"><img src="file-alumni/<?php echo $foto; ?>" style="width:50px; height:50px;" class="img-thumbnail"></td>
                                            <td class="center">
							<a href="ubah-alumni.php?id=<?php echo $data['nis']; ?>"><span class="glyphicon glyphicon-pencil" title="Ubah"></a>&nbsp;&nbsp;
							<a href="javascript:if(confirm('Hapus NIS <?php echo $data['nis']; ?> atas nama <?php echo $data['nama']; ?>??')) { document.location='hapus-alumni.php?id=<?php echo 
							$data['nis']; ?>'; }"><span class="glyphicon glyphicon-trash" title="Hapus"></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="well">
								<h4><a href="tambah-alumni.php"><button type="submit" class="btn btn-success">Tambah</button></a></h4>
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
