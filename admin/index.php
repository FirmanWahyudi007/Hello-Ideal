<?php include '../include/header.php'; ?>
		<div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>
          <div class="row">
            <!-- Area Chart -->
            	<div class="col-xl-12 col-lg-7">
              <?php 
                    if (isset($_GET['pesan'])) {
                      # code...
                      $pesan = $_GET['pesan'];
                      if ($pesan == "berhasil") {
                  ?>
                  <div class="alert alert-success">
                    <strong>Success!!!</strong> Anda berhasil login.
                  </div>
                  <?php
                      }
                    }
                   ?>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="text-align: center;">Artikel</div>
                          <div class="card-body text-primary">
                            <?php
                                include '../koneksi.php';
                                if ($_SESSION['id_level'] == 1):
                                $sql_ar = mysqli_query($koneksi,"SELECT COUNT(id_artikel) AS Total FROM tb_artikel");
                                $ar = mysqli_fetch_array($sql_ar);
                                endif
                            ?>
                            <?php
                                include '../koneksi.php';
                                if ($_SESSION['id_level'] == 2):
                                $sql_ar = mysqli_query($koneksi,"SELECT COUNT(id_artikel) AS Total FROM tb_artikel WHERE id_user='$id_user'");
                                $ar = mysqli_fetch_array($sql_ar);
                                endif
                            ?>
                            <h5 class="card-title" style="text-align: center;"><?=$ar['Total'] ?></h5>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-w">
                      <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="text-align: center;">Resep Makanan</div>
                         <div class="card-body text-primary">
                          <?php
                                include '../koneksi.php';
                                if ($_SESSION['id_level'] == 1):
                                $sql_rm = mysqli_query($koneksi,"SELECT COUNT(id_makanan) AS Total FROM tb_makanan");
                                $rm = mysqli_fetch_array($sql_rm);
                                endif
                            ?>
                           <?php
                                include '../koneksi.php';
                                if ($_SESSION['id_level'] == 2):
                                $sql_rm = mysqli_query($koneksi,"SELECT COUNT(id_makanan) AS Total FROM tb_makanan WHERE id_user='$id_user'");
                                $rm = mysqli_fetch_array($sql_rm);
                                endif
                            ?>
                            <h5 class="card-title" style="text-align: center;"><?=$rm['Total'] ?></h5>
                          </div>
                        </div>
                      </div>
                  </div>  
            	</div>
            </div>
        </div>
<?php include '../include/footer.php'; ?>