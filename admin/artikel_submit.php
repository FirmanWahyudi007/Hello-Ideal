<?php
    include '../koneksi.php';
    
    if (isset($_POST['tambah'])) {
        $kategori = $_POST['kategori'];
        $user_id = $_POST['user_id'];
        $judul_artikel = $_POST['judul_artikel'];
        $lower = strtolower($judul_artikel);
        $url_artikel = str_replace(" ", "-", $lower);
        $isi_artikel = $_POST['isi_artikel'];
        $tanggal_terbit = $_POST['tanggal_terbit'];
        $sampul_artikel = $_FILES['sampul_artikel']['name'];
        $ukuran_file = $_FILES['sampul_artikel']['size'];
        $tipe_file = $_FILES['sampul_artikel']['type'];
        $tmp_file = $_FILES['sampul_artikel']['tmp_name'];
        $folder = "gambar/";

        if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
            if ($ukuran_file <= 1000000) {
                if (move_uploaded_file($tmp_file, $folder.$sampul_artikel)) {
                    $query = "INSERT INTO tb_artikel VALUES ('','$url_artikel', '$sampul_artikel', '$judul_artikel', '$isi_artikel', '$tanggal_terbit','$kategori','$user_id')";
                    $sql = mysqli_query($koneksi, $query);
                    if ($sql) {
                        header ("location: artikel.php");
                    }else {
                        echo "<script>alert('Maaf gagal menyimpan ke database'); window.location='artikel.php';</script>"; 
                    }
                }else {
                    echo "<script>alert('Maaf gagal mengupload gambar');
                    window.location='artikel.php';</script>";  
                }
            }else {
                echo "<script>alert('Ukuran gambar tidak boleh lebih dari 1MB'); window.location='artikel_tambah';</script>";
            }
        }else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg atau png!'); window.location='artikel_tambah.php';</script>";
        }
    }
 ?>