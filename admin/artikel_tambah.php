<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
            	<div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel <a href="artikel.php" class="tombol"> Lihat Semua Data </a></h6>
                        </div>
                        <div class="card-body">
                            <form action="artikel_submit.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" name="user_id" id="user_id" placeholder="User ID" value="<?php echo $id_user ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="judul_artikel" id="judul_artikel" placeholder="Judul Artikel" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tanggal_terbit" id="tanggal_terbit" placeholder="Tanggal Terbit" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="kategori">
                                        <option>Kategori Artikel</option>
                                        <option value="1">Healthy</option>
                                        <option value="2">Safety</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="isi_artikel" class="form-control form-control-user ckeditor" id="ckeditor" cols="30" rows="10" placeholder="Isi Artikel"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user" name="sampul_artikel" id="sampul_artikel" placeholder="Masukkan Gambar" required>
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