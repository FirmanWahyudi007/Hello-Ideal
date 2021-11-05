<?php include '../include/header.php'; ?>
		<div class="container-fluid">
        	<div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            	<h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
          	</div>
        	<div class="row">
     		<!-- Area Chart -->
    			<div class="col-xl-12 col-lg-7">
				<!-- Begin Page Content -->
					<div class="container-fluid">
					  <!-- DataTales Example -->
					  <div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Data Tabel Artikel <a href="artikel_tambah.php" class="tombol"> + Tambah Data Baru </a></h6>
						</div>
						<div class="card-body">
						  <div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
							      <th>No</th>
							      <th>Judul Artikel</th>
							      <th>Sampul</th>
								  <th>Tanggal Terbit</th>
								  <th colspan="2" style="text-align: center;">Opsi</th>
								</tr>
							</thead>
							<!--tfoot>
							  <th>NO</th>
						      <th>Judul Artikel</th>
						      <th>Sampul</th>
							  <th>Tanggal Terbit</th>
							  <th>Opsi</th>
							</tfoot-->
							<tbody>
							<?php
								include "koneksi.php";
								if ($_SESSION['id_level'] == 1):
								$query_mysql = mysqli_query($koneksi,"select * from tb_artikel");
								$nomor = 1;
								while ($data = mysqli_fetch_array($query_mysql)) {
								?>
								<tr>
						      		<td><?php echo $nomor; ?></td>
						      		<td><?php echo $data['judul_artikel']; ?></td>
									<td><img style="width: 120px;" src="gambar/<?php echo $data['sampul_artikel'];?>"></td>
						      		<td><?php echo $data['tanggal']; ?></td>
									<td>
										<a href="artikel_edit.php?id=<?php echo $data['id_artikel']; ?>" class="btn btn-warning btn-sm">Edit</a>
									</td>
									<td>
										<a href="artikel_hapus.php?id=<?php echo $data['id_artikel']; ?>" class="btn btn-danger btn-sm">Hapus</a>
									</td>
								</tr>
								<?php
								$nomor++;
								}
								endif
								?>
							<?php
								include "koneksi.php";
								if ($_SESSION['id_level'] == 2):
								$query_mysql = mysqli_query($koneksi,"select * from tb_artikel where id_user=$id_user");
								$nomor = 1;
								while ($data = mysqli_fetch_array($query_mysql)) {
								?>
								<tr>
						      		<td><?php echo $nomor; ?></td>
						      		<td><?php echo $data['judul_artikel']; ?></td>
									<td><img style="width: 120px;" src="gambar/<?php echo $data['sampul_artikel'];?>"></td>
						      		<td><?php echo $data['tanggal']; ?></td>
									<td>
										<a href="artikel_edit.php?id=<?php echo $data['id_artikel']; ?>" class="btn btn-warning btn-sm">Edit</a>
									</td>
									<td>
										<a href="artikel_hapus.php?id=<?php echo $data['id_artikel']; ?>" class="btn btn-danger btn-sm">Hapus</a>
									</td>
								</tr>
								<?php
								$nomor++;
								}
								endif
								?>
							</tbody>	
							</table>
						</div>
				    </div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->
	</div>
		<?php include '../include/footer.php'; ?>