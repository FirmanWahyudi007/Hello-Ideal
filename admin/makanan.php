<?php include '../include/header.php'; ?>
		<div class="container-fluid">
        	<div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Makanan</h1>
          	</div>
        <div class="row">
     <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
	<!-- Begin Page Content -->
	<div class="container-fluid">
          
		  <!-- DataTales Example -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary">Data Tabel Makanan <a href="makanan_tambah.php" class="tombol"> + Tambah Data Baru </a></h6>
			</div>
			<div class="card-body">
			  <div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
	<tr>
      <th>ID Makanan</th>
      <th>URL</th>
      <th>Nama Makanan</th>
	  <th>Foto</th>
	  <th>Opsi</th>
	</tr>
	</thead>
		
	<tbody>
	<?php if ($_SESSION['id_level'] == 1):
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi,"select * from tb_makanan where id_user");
		$nomor = 1;
		while ($data = mysqli_fetch_array($query_mysql)) {
		?>
		<tr>
      		<td><?php echo $data['id_makanan']; ?></td>
			<td><?php echo $data['url_makanan']; ?></td>
      		<td><?php echo $data['nama_makanan']; ?></td>
      		<td><img style="width: 120px;" src="gambar/<?php echo $data['sampul_makanan'];?>"></td>
			<td>
				<a href="makanan_edit.php?id=<?php echo $data['id_makanan']; ?>" class="btn btn-warning btn-sm">Edit</a>
				<a href="makanan_hapus.php?id=<?php echo $data['id_makanan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php
		}
		endif
		?>
		<?php if ($_SESSION['id_level'] == 2):
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi,"select * from tb_makanan where id_user = '$id_user'");
		$nomor = 1;
		while ($data = mysqli_fetch_array($query_mysql)) {
		?>
		<tr>
      		<td><?php echo $data['id_makanan']; ?></td>
			<td><?php echo $data['url_makanan']; ?></td>
      		<td><?php echo $data['nama_makanan']; ?></td>
      		<td><img style="width: 120px;" src="gambar/<?php echo $data['sampul_makanan'];?>"></td>
			<td>
				<a href="makanan_edit.php?id=<?php echo $data['id_makanan']; ?>" class="btn btn-warning btn-sm">Edit</a>
				<a href="makanan_hapus.php?id=<?php echo $data['id_makanan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php
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
</div>
<!-- End of Main Content -->
<?php include '../include/footer.php'; ?>
