<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hello Ideal - Register Penulis</title>

  <!-- Favicons -->
  <link href="gambar/logo.png" rel="icon">
  <link href="gambar/logo.png" rel="apple-touch-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form class="user" method="post" action="register_process.php">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama..." required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" 
                      name="password" placeholder="Masukkan Password..." pattern=".{6,}" title="Minimal 6 karakter atau lebih" required>
                    </div>
                    <div class="form-group">
                      <small><label>*Password minimal 6 karakter atau lebih.</label></small>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="cpassword" 
                      name="cpassword" placeholder="Konfirmasi Password..." pattern=".{6,}" title="Minimal 6 karakter atau lebih" required>
                    </div>
                    <div class="form-group">
                      <input type="radio" class="form" id="laki" name="kelamin" value="Laki-Laki" 
                      required>
                      <label for="laki" style="padding-right: 10px;">Laki-Laki</label>
                      <input type="radio" class="form" id="perempuan" name="kelamin" value="Perempuan" 
                      required>
                      <label for="perempuan">Perempuan</label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat..." required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" id="nohp" name="nohp" placeholder="Masukkan Nomor HP..." required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Register</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login.php">Have an Account? Login Here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Own Script -->
  <script src="script.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
