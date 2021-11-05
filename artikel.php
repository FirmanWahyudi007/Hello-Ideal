<?php 
  $title = "Artikel"; 
  include 'view/header.php';
  include 'koneksi.php';
?>
  <style>
      .max.title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
  </style>
  <main id="main">
    <?php include 'view/breadcrumbs.php'; ?>
    <section class="blog" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">
          <?php
            $batas = 3;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;	
     
            $previous = $halaman - 1;
            $next = $halaman + 1;
            $delay = 0;
            $data_n = mysqli_query($koneksi,"select * from tb_artikel");
            $jumlah_data = mysqli_num_rows($data_n);
                    $total_halaman = ceil($jumlah_data / $batas);
                    $jumlah_number = 2;
                    $start_number = ($halaman > $jumlah_number)? $halaman - $jumlah_number : 1;
                    $end_number = ($halaman < ($total_halaman-$jumlah_number)) ? $halaman + $jumlah_number : $total_halaman;
      if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
        if ($cari == null) {
          $data = mysqli_query($koneksi,"SELECT a.url_artikel,a.judul_artikel,a.isi_artikel,a.sampul_artikel,a.tanggal,u.nama,k.kategori FROM tb_artikel a INNER JOIN tb_user u ON a.id_user=u.id_user INNER JOIN tb_kategori k ON a.id_kategori=k.id_kategori limit $halaman_awal, $batas");
        }else {
          $data = mysqli_query($koneksi,"SELECT a.url_artikel,a.judul_artikel,a.isi_artikel,a.sampul_artikel,a.tanggal,u.nama,k.kategori FROM tb_artikel a INNER JOIN tb_user u ON a.id_user=u.id_user INNER JOIN tb_kategori k ON a.id_kategori=k.id_kategori WHERE a.judul_artikel LIKE '%$cari%';");
        }
      }elseif (isset($_GET['kategori'])) {
        $kategori = $_GET['kategori']; 
        $data = mysqli_query($koneksi,"SELECT a.url_artikel,a.judul_artikel,a.isi_artikel,a.sampul_artikel,a.tanggal,u.nama,k.kategori FROM tb_artikel a INNER JOIN tb_user u ON a.id_user=u.id_user INNER JOIN tb_kategori k ON a.id_kategori=k.id_kategori WHERE k.kategori='$kategori';");
      }else{
        $data = mysqli_query($koneksi,"SELECT a.url_artikel,a.judul_artikel,a.isi_artikel,a.sampul_artikel,a.tanggal,u.nama,k.kategori FROM tb_artikel a INNER JOIN tb_user u ON a.id_user=u.id_user INNER JOIN tb_kategori k ON a.id_kategori=k.id_kategori limit $halaman_awal, $batas");
      }
      $nomor = $halaman_awal+1;
      echo mysqli_error($koneksi);
      while($d = mysqli_fetch_array($data)){
            ?>
            <article class="entry" data-aos="fade-up">
              <div class="entry-img">
                <img src="admin/gambar/<?php echo $d['sampul_artikel']; ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                      <a><?php echo $d['judul_artikel']; ?></a></h2>
              <div class="entry-meta">
                <ul>
                  <input type="hidden" <?php echo $nomor++; ?>>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i><?php echo $d['nama']; ?></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time><?php echo $d['tanggal']; ?></time></li>
                  <li class="d-flex align-items-center" style="text-transform: capitalize;"><i class="icofont-folder"></i><?php echo $d['kategori']; ?></li>
                </ul>
              </div>

              <div class="entry-content">
                <p><div clas="max tittle" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical;">
                <?php echo $d['isi_artikel']; ?>
                </div></p>
                <div class="read-more">
                    <a href="detail_artikel.php?url=<?php echo $d['url_artikel']; ?>">Read More</a>
                </div>
              </div>
            </article>
                <?php 
                }
                ?>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>><i class="icofont-rounded-left"></i></a></li>
                <?php 
			          	for($x=$start_number;$x<=$end_number;$x++){
                   $link_active = ($halaman == $x) ? 'class="active"': '';
			        	?> 
				        	<li <?php echo $link_active; ?>><a href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
			        	<?php
			          	}
				        ?>		
                <li><a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Cari</h3>
              <div class="sidebar-item search-form">
                <form action="" method="POST">
                  <input type="text" name="cari">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="artikel.php?kategori=healthy">Healthy</a></li>
                  <li><a href="artikel.php?kategori=safety">Safety</a></li>
                </ul>

              </div><!-- End sidebar categories-->
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section>
  </main>
<?php include 'view/footer.php'; ?>