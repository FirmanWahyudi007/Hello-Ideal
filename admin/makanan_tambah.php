<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Makanan</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
            	<div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Tambah Makanan <a href="makanan.php" class="tombol">---Lihat Semua Data---</a></h6>
                        </div>
                        <div class="card-body">
                            <form action="makanan_submit.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" name="id_user" id="id_user" placeholder="User ID" value="<?php echo $id_user ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama_makanan" id="nama_makanan" placeholder="Nama Makanan" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="resep_makanan" class="form-control form-control-user ckeditor" id="ckeditor" cols="30" rows="10" placeholder="Masukkan Resep"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kalori" id="kalori" placeholder="Kalori" required>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user" name="sampul_makanan" id="sampul_makanan" placeholder="Masukkan Gambar" required>
                                </div>
                                <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
        </div>
<?php include '../include/footer.php'; ?>