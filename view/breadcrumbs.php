<!-- ======= Breadcrumbs ======= -->
<?php 
	$halaman = strtolower($title);
?>
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title; ?></h2>
          <?php 
            if ($cari != null) {
          ?>
          <h2><center>Cari : <?php echo "$cari"; ?></center></h2>
          <?php
            }elseif ($kategori != null) {
          ?>
          <h2 style="text-transform: capitalize;"><center>Kategori : <?php echo "$kategori"; ?></center></h2>
          <?php
            }
           ?>
          <ol>
            <li><a href="./">Home</a></li>
            <li><a style="color: white;" href="<?php echo str_replace(" ", "_", $halaman).".php"; ?>"><?php echo $title; ?></a></li>
            <?php if ($judul != null): ?>
              <li><?php echo $judul; ?></li>
            <?php endif ?>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs -->
