<?php 
  $title = "Home";
  include 'view/header.php'; 
  include 'view/hero.php';
?>
<style>
      form {padding: 15px 0;min-height: 40px;}
      .search {padding:8px 15px; background: #f0f8ff; border:2px solid #008080;}
      .button {position:relative;left:-4px; padding:10px 15px; border:0px solid #008080; background-color: #FF3300; color:#FAFAFA;font-weight:bold;}
      .button:hover {background: #800000; color:#FAFAFA;}
      .button:active {background:#2b2320;}
      .max.title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
    </style>
  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="artikel" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2><strong>Artikel</strong></h2>
        </div>
        <div class="row">
          <?php 
            include 'koneksi.php';
            $delay = 0;
            $query = mysqli_query($koneksi,"SELECT * FROM tb_artikel LIMIT 6;");
            while ($data = mysqli_fetch_array($query)) {
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
              <div class="icon"><img style="width: 120px;" src="admin/gambar/<?php echo $data['sampul_artikel'];?>"></div>
              <h4 class="title"><a href="detail_artikel.php?url=<?php echo $data['url_artikel']; ?>"><?php echo $data['judul_artikel']; ?></a></h4>
              <div class="max tittle" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
              <?php 
                echo $data['isi_artikel']; 
                $delay = $delay + 200;
              ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2><strong>Makanan</strong></h2>
        </div>
        <div class="row">
          <?php 
            include 'koneksi.php';
            $delay = 0;
            $query = mysqli_query($koneksi,"SELECT * FROM tb_makanan LIMIT 6;");
            while ($data = mysqli_fetch_array($query)) {
          ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="admin/gambar/<?php echo $data['sampul_makanan'];?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama_makanan']; ?></h5>
                <div style="padding-top: 2px;"><b><?php echo "Kalori : ".$data['kalori']?></b></div>
                <div class="max tittle" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
                  <?php 
                    echo $data['resep']; 
                    $delay = $delay + 200;
                  ?>
              </div>
                <div class="read-more" style="padding-top: 10px;">
                <a href="detail_makanan.php?url=<?php echo $data['url_makanan'];  ?>" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          <br>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
<?php include 'view/footer.php'; ?>
