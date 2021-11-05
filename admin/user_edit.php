<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user = '$id'");
             ?>
          </div>
          <div class="row">
            <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                        <?php while ($array = mysqli_fetch_array($query)) { ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Edit User <a href="user.php" class="tombol"> Lihat Semua Data </a></h6>
                        </div>
                        <div class="card-body">
                            <form action="user_update.php" method="POST">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" name="id_user" id="id_user" placeholder="User ID" value="<?php echo $array['id_user'] ?>" required>
                                    <label><small>Email :</small></label>
                                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email" required value="<?php echo $array['email']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label><small>Nama :</small></label>
                                    <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Nama" required value="<?php echo $array['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label><small>Alamat :</small></label>
                                    <input type="text" class="form-control form-control-user" name="alamat" id="alamat" placeholder="Alamat" required value="<?php echo $array['alamat']; ?>">
                                </div>
                                <div class="form-group">
                                    <label><small>Jenis Kelamin :</small></label>
                                    <select class="form-control form-control-user" name="kelamin">
                                        <option>Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><small>Nomor HP :</small></label>
                                    <input type="number" class="form-control form-control-user" name="nohp" id="nohp" placeholder="Nomor Handphone" required value="<?php echo $array['nohp']; ?>">
                                </div>
                                <div class="form-group">
                                    <label><small>Level :</small></label>
                                    <select class="form-control form-control-user" name="level">
                                        <option>Level User</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User/Penulis</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Pie Chart -->
        </div>
<?php include '../include/footer.php'; ?>