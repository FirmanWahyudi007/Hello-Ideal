<?php include '../include/header.php'; ?>

        <?php  
            include 'koneksi.php';
            $id = $_SESSION['user_id'];
            $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id'");
            $data = mysqli_fetch_array($query);
        ?>

		<div class="container-fluid">
          <?php  
            if (isset($_GET['pesan'])) {
                $pesan = $_GET['pesan'];
                if ($pesan == "updateBerhasil") {
                ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Update Profile Berhasil!.
                    </div>
                <?php
                }
            }
          ?>
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                        </div>
                        <div class="card-body">
                            <form action="profile_update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label><small>Email :</small></label>
                                    <input type="hidden" class="form-control form-control-user" name="id_user" id="id_user" value="<?=$data['id_user']?>" required>
                                    <input type="email" class="form-control form-control-user" name="email" id="email" value="<?=$data['email']?>" readonly/>
                                </div>
                                <div class="form-group">
                                    <label><small>Nama :</small></label>
                                    <input type="text" class="form-control form-control-user" name="nama" id="nama" value="<?=$data['nama']?>" required>
                                </div>
                                <div class="form-group">
                                    <label><small>Nomor HP :</small></label>
                                    <input type="number" class="form-control form-control-user" name="nohp" id="nohp" value="<?=$data['nohp']?>" required>
                                </div>
                                <div class="form-group">
                                    <label><small>Alamat :</small></label>
                                    <input type="text" class="form-control form-control-user" name="alamat" id="alamat" value="<?=$data['alamat']?>" required>
                                </div>
                                <button type="submit" class="btn btn-success" name="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include '../include/footer.php'; ?>
