<?php include '../include/header.php'; ?>
		<div class="container-fluid">
        	<div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            	<h1 class="h3 mb-0 text-gray-800">Data User</h1>
          	</div>
        	<div class="row">
     		<!-- Area Chart -->
    			<div class="col-xl-12 col-lg-7">
            	<?php 
	                if (isset($_GET['pesan'])) {
	                $pesan = $_GET['pesan'];
		                if ($pesan == "tambahBerhasil") {
		              	?>
			              	<div class="alert alert-success">
			                	<strong>Success!</strong> User Berhasil Ditambah.
			              	</div>
		              	<?php
		                }elseif ($pesan == "updateBerhasil") {
		              	?>
			              	<div class="alert alert-success">
			                	<strong>Success!</strong> Update User Berhasil.
			              	</div>
		              	<?php
		                }elseif ($pesan == "hapusBerhasil") {
		              	?>
			              	<div class="alert alert-success">
			                	<strong>Success!</strong> Hapus User Berhasil.
			              	</div>
		              	<?php
		                }elseif ($pesan == "emailTerdaftar") {
		              	?>
			              	<div class="alert alert-danger">
			                	<strong>Danger!</strong> Email Telah Terdaftar!.
			              	</div>
		              	<?php
		                }
	                }
                ?>
				<!-- Begin Page Content -->
					<div class="container-fluid">
					  <!-- DataTales Example -->
					  <div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Data Tabel User <a href="user_tambah.php" class="tombol"> + Tambah Data Baru </a></h6>
						</div>
						<div class="card-body">
						  <div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
							      <th>No</th>
								  <th>Nama</th>
								  <th>Alamat</th>
								  <th>Kelamin</th>
								  <th>Nomor Handphone</th>
								  <th>Level</th>
								  <th colspan="2" style="text-align: center;">Opsi</th>
								</tr>
							</thead>
							<tbody>
							<?php
								include "koneksi.php";
								$query = "SELECT m.id_user,m.nama,m.alamat,m.kelamin,m.nohp,m.email,m.password,u.level FROM tb_user m INNER JOIN tb_level u ON m.id_level=u.id_level";
								$query_mysql = mysqli_query($koneksi,$query);
								$nomor = 1;
								while ($data = mysqli_fetch_array($query_mysql)) {
								?>
								<tr>
						      		<td><?php echo $nomor; ?></td>
						      		<td><?php echo $data['nama']; ?></td>
						      		<td><?php echo $data['alamat']; ?></td>
						      		<td><?php echo $data['kelamin']; ?></td>
						      		<td><?php echo $data['nohp']; ?></td>
						      		<td><?php echo $data['level']; ?></td>
									<td>
										<a href="user_edit.php?id=<?php echo $data['id_user']; ?>" class="btn btn-warning btn-sm">Edit</a>
									</td>
									<td>
										<a href="user_hapus.php?id=<?php echo $data['id_user']; ?>" class="btn btn-danger btn-sm">Hapus</a>
									</td>
								</tr>
								<?php
								$nomor++;
								}
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