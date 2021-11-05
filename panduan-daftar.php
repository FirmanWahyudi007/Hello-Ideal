<?php 
  $title = "Panduan Daftar Penulis"; 
  include 'view/header.php';
?>
  <main id="main">
    <?php include 'view/breadcrumbs.php'; ?>
    <section clas="blog" id="blog">
      <div class="container" data-aos="fade-up">
        <h5>
          <ol>
            <li>Klik Login pada navbar.</li>
            <li>Jika Belum Mempunyai Akun, Silahkan Klik <a href="register.php">Daftar Disini</a></li>
            <li>Masukkan Data dengan Benar,Perhatikan Hal-Hal Berikut :</li>
              <ul>
                <li>Username dan Password digunakan hanya untuk Login ke dalam website.</li>
              </ul>
            <li>Jika sudah mendaftar, Login menggunakan Username dan Password yang telah didaftarkan.</li>
            <li>Setelah Login, Anda akan masuk di Dashboard Penulis.</li>
            <li>Setiap Penulis dapat membuat Artikel dan Menu Makanan sesuai dengan kebutuhan user.</li>
            <li>Setelah Mengisi data Artikel ataupun Menu Makanan Klik Simpan maka apa yang ditulis akan otomatis terbagikan.</li>
            <li>Ingat isi sesuai data yang benar dan jangan memanipulasi data.</li>
          </ol>
        </h5>
      </div>
      </section>
  </main>
<?php include 'view/footer.php'; ?>
