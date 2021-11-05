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
                          <h6 class="m-0 font-weight-bold text-primary">Edit Artikel <a href="artikel.php" 
                            class="tombol"> Lihat Semua Data </a></h6>
                        </div>

                        <?php  
                            include 'koneksi.php';
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_artikel WHERE 
                                id_artikel = '$id' ");
                            while ($data = mysqli_fetch_array($query_mysql)) {
                        ?>

                        <div class="card-body">
                            <form action="artikel_update.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="hidden" class="form-control form-control-user" name="user_id" id="user_id" value="<?=$data['id_user']?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="judul_artikel" id="judul_artikel" value="<?=$data['judul_artikel'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tanggal_terbit" id="tanggal_terbit" value="<?=$data['tanggal']?>">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="kategori">
                                        <option disabled selected>Kategori Artikel</option>
                                        <?php  
                                            $getArtikel = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                            while ($artikel = mysqli_fetch_array($getArtikel)) {
                                        ?>
                                        <option value="<?=$artikel['id_kategori']?>" 
                                            <?=($data['id_kategori'] == 
                                            $artikel['id_kategori']) ? "selected" : "";?>
                                            ><?=$artikel['kategori']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="isi_artikel" class="form-control form-control-user ckeditor" id="ckeditor" cols="30" rows="10"><?=$data['isi_artikel'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="FILE" class="form-control form-control-user" name="sampul_artikel" id="sampul_artikel" style="padding: 4px;">
                                </div>
                                <button type="submit" class="btn btn-success" name="submit">Update</button>
                            </form>
                        </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
        </div>

<?php include '../include/footer.php'; ?>