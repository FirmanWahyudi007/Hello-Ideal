<?php 
	$title = "Resep Makanan"; 
	include 'view/header.php';
?>
	<main id="main">
  <center>
  <?php include 'view/breadcrumbs.php'; ?>
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
    <div class="container">
    <form action="" method="POST">
      <input type="search" class="search" name="cari" placeholder="search"><button type="submit" class="button"><i class="icofont-search"></i></button>
    </form>
    </div>
    </center>
		<section class="blog" id="blog">
      <section id="services" class="services">
      <div class="container">
        <div class="row">
        <?php
        include "koneksi.php";
        $batas = 6;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				$delay = 0;
				$data_n = mysqli_query($koneksi,"select * from tb_makanan");
				$jumlah_data = mysqli_num_rows($data_n);
                $total_halaman = ceil($jumlah_data / $batas);
                $jumlah_number = 2;
                $start_number = ($halaman > $jumlah_number)? $halaman - $jumlah_number : 1;
                $end_number = ($halaman < ($total_halaman-$jumlah_number)) ? $halaman + $jumlah_number : $total_halaman;

                if(isset($_POST["cari"])){
                    $search = $_POST['cari'];
                    if ($search == null) {
                      $data_makanan = mysqli_query($koneksi,"select * from tb_makanan limit $halaman_awal, $batas");
                    }else {
                      $data_makanan = mysqli_query($koneksi, "select * from tb_makanan WHERE nama_makanan LIKE '%".$search."%'");
                    } 
                } else {
                    $data_makanan = mysqli_query($koneksi,"select * from tb_makanan limit $halaman_awal, $batas");
                }
                $nomor = $halaman_awal+1;
 
        while ($data = mysqli_fetch_array($data_makanan)) {
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
              <input type="hidden" <?php echo $nomor++; ?>>
              <div class="icon"><img style="width: 120px;" src="admin/gambar/<?php echo $data['sampul_makanan'];?>"></div>
              <h4 class="title"><a href="detail_makanan.php?url=<?php echo $data['url_makanan'];  ?>"><?php echo $data['nama_makanan']; ?></a></h4>
              <div class="max tittle" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
              <?php echo $data['resep']; 
              $delay = $delay+200;
              ?>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
    <nav>
      <div class="blog-pagination">
			<ul class="pagination justify-content-center">
				<li class="page-item">
				<a <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=$start_number;$x<=$end_number;$x++){
            $link_active = ($halaman == $x) ? 'class="page-item active"': '';
				?> 
					<li <?php echo $link_active; ?>><a href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
				<?php
				}
				?>				
				<li class="page-item">
					<a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
      </div>
		</nav>
      </div>
      </section>
		</section>
	</main>
<?php include 'view/footer.php'; ?>