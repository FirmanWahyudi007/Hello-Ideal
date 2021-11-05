<?php 
	$title = "Perhitungan IMT"; 
	include 'view/header.php';
?>
	<main id="main">
		<?php include 'view/breadcrumbs.php'; ?>
		<section clas="blog" id="blog">
			<div class="container">
				<div class="card" data-aos="fade-up">
	  				<h5 class="card-header" style="background-color: white;">Form <?php echo "$title"; ?></h5>
	  				<div class="card-body">
				    	<form method="post" action="hasil_imt.php" autocomplete="off">
				    		<div class="form-group row">
							    <label class="col-sm-2 col-form-label">Nama</label>
							    <div class="col-sm-10">
							    	<input type="nama" class="form-control" placeholder="Nama" name="nama">
								</div>
							</div>
							<div class="form-group row">
							    <label class="col-sm-2 col-form-label">Usia</label>
							    <div class="col-sm-10">
							    	<input type="usia" class="form-control" placeholder="Usia" name="usia">
								</div>
							</div>
							<fieldset class="form-group">
							    <div class="row">
							    	<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
							    	<div class="col-sm-10">
							        	<div class="form-check">
							        		<input class="form-check-input" type="radio" name="jk" value="Laki-Laki">
							          		<label class="form-check-label">
							          			Laki - Laki
							          		</label>
							        	</div>
							        	<div class="form-check">
							        		<input class="form-check-input" type="radio" name="jk" value="Perempuan">
							          		<label class="form-check-label">
							          			Perempuan
							          		</label>
							        	</div>
							    	</div>
							    </div>
							</fieldset>
							<div class="form-group row">
							    <label class="col-sm-2 col-form-label">Tingi Badan</label>
							    <div class="col-sm-10">
							    	<input type="text" name="tb" class="form-control" placeholder="Tingi Badan">
								</div>
							</div>
							<div class="form-group row">
							    <label class="col-sm-2 col-form-label">Berat Badan</label>
							    <div class="col-sm-10">
							    	<input type="text" name="bb" class="form-control" placeholder="Berat Badan">
								</div>
							</div>
							<fieldset class="form-group">
							    <div class="row">
							    	<legend class="col-form-label col-sm-2 pt-0">Aktivitas</legend>
							    	<div class="col-sm-10">
							        	<div class="form-check">
							        		<input class="form-check-input" type="radio" name="aktivitas" value="1.2">
							          		<label class="form-check-label">
							          			Rendah
							          		</label></br>
											  (75% dari waktu yang digunakan adalah untuk duduk atau berdiri dan 25% untuk kegiatan berdiri dan berpindah)
							        	</div>
							        	<div class="form-check">
							        		<input class="form-check-input" type="radio" name="aktivitas" value="1.3">
							          		<label class="form-check-label">
							          			Sedang
							          		</label></br>
											  (25% waktu yang digunakan adalah untuk duduk atau berdiri dan 75% untuk kegiatan khusus dalam bidang pekerjaannya)
							        	</div>
							        	<div class="form-check">
							        		<input class="form-check-input" type="radio" name="aktivitas" value="1.4">
							          		<label class="form-check-label">
							          			Berat
							          		</label></br>
											  (40% dari waktu yang digunakan adalah untuk duduk atau berdiri dan 60% untuk kegiatan kerja khusus dalam bidangnya pekerjaannya)
							        	</div>
							    	</div>
							    </div>
							</fieldset>
							<div class="form-group row">
							    <div class="col-sm-10">
							      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							    </div>
							</div>
				    	</form>
				  	</div>
				</div>
			</div>
		</section>
	</main>
<?php include 'view/footer.php'; ?>