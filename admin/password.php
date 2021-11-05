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
                  <strong>Success!</strong> Ubah Password Berhasil.
                </div>
              <?php
              }else if ($pesan=="passwordSalah") {
              ?>
                <div class="alert alert-danger">
                  <strong>Danger!</strong> Password Lama Salah!.
                </div>
              <?php
              }
            }
          ?>
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Password</h6>
                        </div>
                        <div class="card-body">
                            <form action="password_update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" name="id_user" id="id_user" value="<?=$data['id_user']?>" required>
                                    <label><small>Password Lama :</small></label>
                                    <input type="password" class="form-control form-control-user" name="oldpassword" id="oldpassword" required>
                                </div>
                                <div class="form-group">
                                    <label><small>Password Baru :</small></label>
                                    <input type="password" class="form-control form-control-user" name="password" id="password" pattern=".{6,}" title="Minimal 6 karakter atau lebih" required>
                                </div>
                                <div class="form-group">
                                    <label><small>Konfirmasi Password Baru :</small></label>
                                    <input type="password" class="form-control form-control-user" name="cpassword" id="cpassword" pattern=".{6,}" title="Minimal 6 karakter atau lebih" required>
                                </div>
                                <button type="submit" class="btn btn-success" name="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="../script.js"></script>

<?php include '../include/footer.php'; ?>
