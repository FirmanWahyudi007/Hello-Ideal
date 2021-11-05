  <?php 
	include 'koneksi.php';
  $url = $_GET['url'];
  $query_mysql = mysqli_query($koneksi,"select * from tb_makanan where url_makanan = '$url'");
  $data = mysqli_fetch_array($query_mysql);
  $title = "Resep Makanan";
  include 'view/header.php';
  $judul = $data['nama_makanan'];
  include 'view/breadcrumbs.php';
?>


  <main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

        <?php
        $query = "SELECT m.id_makanan,m.kalori,m.nama_makanan,m.resep,m.sampul_makanan,m.url_makanan,u.nama FROM tb_makanan m INNER JOIN tb_user u ON m.id_user=u.id_user WHERE m.url_makanan = '$url'";
        $mysql = mysqli_query($koneksi,$query);
        while ($data = mysqli_fetch_array($mysql)) {
          ?>
            <article class="entry entry-single" data-aos="fade-up" >
              <div class="entry-img">
                <center>
              <img style="width: 500px;" src="admin/gambar/<?php echo $data['sampul_makanan'];?>">
                </center>
              </div>

              <h2 class="entry-title">
                <a href="<?php echo $data['url_makanan']?>"><center><?php echo $data['nama_makanan']; ?></center>  </a>
              </h2>

              <div class="entry-content">
                <p> <?php echo $data['resep']; ?> <p>
                  <p><b> Kalori : <?php echo $data['kalori'];?></b></p>
              </div>
            </article><!-- End blog entry -->

            <div class="blog-author clearfix" data-aos="fade-up">
              <img src="admin/gambar/default_avatar.png" class="rounded-circle float-left" alt="">
              <h4><?php echo $data['nama']; ?></h4>
              <p>
                
              </p>
            </div><!-- End blog author bio -->
            <div class="blog-comments" data-aos="fade-up">
              <?php         
                }
                ?>
        </div>
      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'view/footer.php'; ?>