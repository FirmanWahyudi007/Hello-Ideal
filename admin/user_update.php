<?php
    include 'koneksi.php';
    
    if (isset($_POST['update'])) {
		$id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $level = $_POST['level'];

        $query = "UPDATE tb_user SET nama='$nama', alamat='$alamat',kelamin='$kelamin',nohp='$nohp',email='$email',id_level='$level' WHERE id_user='$id_user'";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            header ("location: user.php?pesan=updateBerhasil");
        }else{
            echo mysqli_error($koneksi);
        }
    }
 ?>