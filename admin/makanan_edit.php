<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Makanan</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
            	<div class="col-xl-12 col-lg-7">
                <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($koneksi,"select * from tb_makanan where id_makanan = '$id'");
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Update Makanan <a href="makanan.php" class="tombol">---Lihat Semua Data---</a></h6>
                        </div>
                        <div class="card-body">
                            <form action="makanan_update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id_makanan" value="<?php echo $data['id_makanan']; ?>">
                                    <input type="hidden" class="form-control form-control-user" name="id_user" placeholder="User ID" value="<?php echo $data['id_user'] ?>" required >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama_makanan"placeholder="Nama Makanan" value="<?php echo $data['nama_makanan'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="resep_makanan" class="form-control form-control-user ckeditor" id="ckeditor" cols="30" rows="10" placeholder="Masukkan Resep"><?php echo $data['resep'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kalori" placeholder="Kalori" value="<?php echo $data['kalori'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user" name="sampul_makanan" placeholder="Masukkan Gambar">
                                    <img style="width: 120px;" src="gambar/<?php echo $data['sampul_makanan'];?>">
                                </div>
                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                                </form>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
        </div>
<?php include '../include/footer.php'; ?>