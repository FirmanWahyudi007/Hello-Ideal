<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi,"SELECT MAX(id_user) as ID FROM tb_user");
                $array = mysqli_fetch_array($query);
                $id = $array['ID'];
                $COUNT = $id + 1;
             ?>
          </div>
          <div class="row">
            <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Tambah User <a href="user.php" class="tombol"> Lihat Semua Data </a></h6>
                        </div>
                        <div class="card-body">
                            <form action="user_submit.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" name="id_user" id="id_user" placeholder="User ID" value="<?php echo $COUNT ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" id="alamat" placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="kelamin">
                                        <option>Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="nohp" id="nohp" placeholder="Nomor Handphone" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="level">
                                        <option>Level User</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User/Penulis</option>
                                    </select>
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