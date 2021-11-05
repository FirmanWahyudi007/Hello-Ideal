<?php 
	include 'koneksi.php';
	$url = $_GET['url'];
	$article = mysqli_query($koneksi,"SELECT judul_artikel FROM tb_artikel WHERE url_artikel = '$url'");
	$a = mysqli_fetch_array($article);
	$title = "Artikel";
	include 'view/header.php';
	$judul = $a['judul_artikel']; 
?>
	<main id="main">
		<?php include 'view/breadcrumbs.php'; ?>
		<section class="blog" id="blog">
			<div class="container">
        		<div class="row">

        		<?php
        			$query = mysqli_query($koneksi,"SELECT a.url_artikel,a.judul_artikel,a.isi_artikel,a.sampul_artikel,a.tanggal,u.nama,u.alamat,k.kategori FROM tb_artikel a INNER JOIN tb_user u ON a.id_user=u.id_user INNER JOIN tb_kategori k ON a.id_kategori=k.id_kategori WHERE url_artikel='$url'");
        			while ($data = mysqli_fetch_array($query)) {
        		?>
          			<div class="col-lg-8 entries">
          				<article class="entry" data-aos="fade-up">
          					<div class="entry-img">
			                	<center>
			              			<img style="width: 500px;" src="admin/gambar/<?php echo $data['sampul_artikel'];?>">
			                	</center>
			              	</div>
			              	<div class="entry-meta">
			                	<ul>
			                  		<li class="d-flex align-items-center"><i class="icofont-user"></i><?php echo $data['nama']; ?></li>
			                  		<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time><?php echo $data['tanggal']; ?></time></li>
			                	</ul>
			              	</div>
			              	<h2 class="entry-title">
			                	<a href="<?php echo $data['url_artikel']?>"> <?php echo $data['judul_artikel']; ?>  </a>
			              	</h2>
			              	<div class="entry-content">
			                	<p> <?php echo $data['isi_artikel']; ?> </p>
			              	</div>
			              	<div class="entry-footer clearfix">
				                <div class="float-left">
				                  <i class="icofont-folder"></i>
				                  <ul class="cats">
				                    <li><a href="artikel.php?kategori=<?php echo $data['kategori'] ?>"><?php echo $data['kategori'] ?></a></li>
				                  </ul>
				                </div>
				            </div>
			            </article><!-- End blog entry -->
			            <div class="blog-author clearfix" data-aos="fade-up">
			              <img src="admin/gambar/default_avatar.png" class="rounded-circle float-left" alt="">
			              <h4><?php echo $data['nama']; ?></h4>
			              <p><?php echo $data['alamat'] ?></p>
			            </div><!-- End blog author bio -->
          			</div>
          		<?php } ?>
          		         <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Cari</h3>
              <div class="sidebar-item search-form">
                <form action="artikel.php" method="POST">
                  <input type="text" name="cari">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php
                  	$query_kat = mysqli_query($koneksi,"SELECT * FROM tb_kategori");
                  	while ($k = mysqli_fetch_array($query_kat)) {
                 	?>
                 		<li><a href="artikel.php?kategori=<?php echo $k['kategori'] ?>"><?php echo $k['kategori'] ?></a></li>
                 	<?php
                  	 } 
                   ?>
                </ul>

              </div><!-- End sidebar categories-->
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
          		</div>
          	</div>
		</section>
	</main>
<?php include 'view/footer.php'; ?>