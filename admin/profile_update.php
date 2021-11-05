<?php  
include '../koneksi.php';
    
    if (isset($_POST['submit'])) {
    	$id = $_POST['id_user'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
		
        $query = "UPDATE tb_user SET nama='$nama', email='$email', nohp='$nohp', alamat='$alamat' WHERE id_user='$id' ";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            header ("location: profile.php?pesan=updateBerhasil");
        }else {
            echo "<script>alert('Maaf gagal menyimpan ke database'); window.location='profile.php';</script>";
        }
    }
?>
