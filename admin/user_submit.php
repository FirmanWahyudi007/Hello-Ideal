<?php
    include '../koneksi.php';
    
    if (isset($_POST['tambah'])) {
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        $cekEmail = mysqli_num_rows(mysqli_query($koneksi, "SELECT email FROM tb_user WHERE email='$email'"));
        
        if (!$cekEmail > 0) {
            $query = "INSERT INTO tb_user VALUES ('$id_user','$nama','$alamat','$kelamin', '$nohp','$password',
            '$email','$level')";
            $sql = mysqli_query($koneksi, $query);
            if ($sql) {
                header ("location: user.php?pesan=tambahBerhasil");
            }else {
                //echo "<script>alert('Maaf gagal menyimpan ke database'); window.location='user.php';</script>"; 
                echo mysqli_error($koneksi);
            }
        }else{
            header('location: user.php?pesan=emailTerdaftar');
        }

                
    }
 ?>