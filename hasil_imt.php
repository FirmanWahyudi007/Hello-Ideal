<?php 
	include 'koneksi.php';
	$title = "IMT"; 
	include 'view/header.php';
	$judul = "Hasil Perhitungan";
?>
	<main id="main">
		<?php include 'view/breadcrumbs.php'; ?>
		<section class="blog" id="blog">
			<section clas="blog" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div class="card" data-aos="fade-up" style="float:">
			  				<h5 class="card-header" style="background-color: white; text-align: center;"><?php echo "$judul"; ?></h5>
			  				<div class="card-body">
			  				<?php  
			  					if (isset($_POST['submit'])) {
									$nama = $_POST['nama'];
									$usia = $_POST['usia'];
									$beratbadan = $_POST['bb'];
									$tinggibadan = $_POST['tb'];
									$jeniskelamin = $_POST['jk'];
									$aktivitas = $_POST['aktivitas'];
									$meter =  $tinggibadan * 0.01;
									$tm = $meter*$meter;
									$imt = $beratbadan/$tm;
									if ($jeniskelamin == "Laki-Laki") {
										$bbi = ($tinggibadan-100)-(($tinggibadan - 100)*0.1);
										$kal = 	88.362 + (13.397 * $beratbadan) + (4.799 * $tinggibadan) - (5.677 * $usia); 
									}elseif ($jeniskelamin == "Perempuan") {
										$bbi = ($tinggibadan-100)-(($tinggibadan - 100)*0.15);
										$kal = 	447.593 + (9.247 * $beratbadan) + (3.098 * $tinggibadan) - (4.33 * $usia);
									}
									//$kal = (88.4 + 13.4 * $bbi) + (4.8 * $tinggibadan) - (5.68 * $usia);
									$kalori = $kal * $aktivitas;
									//pengurangan kalori perhari
									$kalperhari = $kalori-500;
									//pembagian makan dalam sehari
									$makansehari = $kalperhari/3;
									$query = mysqli_query($koneksi,"SELECT * FROM tb_makanan WHERE kalori <=$makansehari ORDER BY kalori DESC LIMIT 3");
									if ($imt <= 18.4) {
										$class = "text-primary";
										$klasifikasi = "Kurus(Kurang)";
									}elseif ($imt >= 18.5 && $imt <= 24.9) {
										$class = "text-success";
										$klasifikasi = "Normal";
									}elseif ($imt >= 24.5 && $imt <= 29.9) {
										$class = "text-warning";
										$klasifikasi = "Berlebih";
									}elseif ($imt >= 30 && $imt <= 39.9) {
										$class = "text-danger";
										$klasifikasi = "Gemuk";
									}elseif ($imt >= 40) {
										$class = "text-primary";
										$klasifikasi = "Sangat Gemuk";
									}
									$isi = "Untuk menurunkan berat badan, Anda harus mengonsumsi makanan dan minuman dengan jumlah kalori yang lebih kecil dari kebutuhan kalori harian Anda. Kurangi sebanyak 300-500 kalori per hari dari hasil perhitungan yang Anda dapatkan. Mengurangi jumlah asupan Anda setidaknya 500 kkal per hari dapat membantu menurunkan berat badan Anda sebesar 0,5-1 kg per minggu.<br>
										Rekomendasi Makanan yang cocok untuk kamu : <br>"
			  				?>
			  					<h5 class="card-text">IMT yang didapatkan <?= round($imt,1); ?> (<b class="<?= $class ?>"><?= $klasifikasi ?></b>)</h5>
			  					<p class="card-text">
			  					Nama : <?php echo "$nama"; ?><br>
			  					Usia : <?php echo $usia; ?><br>
			  					Berat Badan : <?php echo $beratbadan; ?> KG | Tinggi Badan : <?php echo $tinggibadan ?> CM <br>
			  					Berat Badan Ideal : <?php echo $bbi ?> KG <br>
			  					Kalori yang dibutuhkan : <?php echo round($kalori); ?> Kal </p>
			  					<p class="card-text" style="text-align: center;">
			  						Bagaimana cara menurunkan berat badan jika saya <?= $klasifikasi ?>? <br>
			  						<ul>
			  						<?php 
			  							echo $isi;
			  							while ($data = mysqli_fetch_array($query)) {
			  						?>
			  							<li><a href="detail_makanan.php?url=<?= $data['url_makanan'] ?>"><?= $data['nama_makanan'] ?></a></li>
			  						<?php
			  							 } 
			  						?>
			  						</ul>
			  					</p>
			  				<?php } ?>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
	  		</div>
		</section>
	</main>
<?php include 'view/footer.php'; ?>