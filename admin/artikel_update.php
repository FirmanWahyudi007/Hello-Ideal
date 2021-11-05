<?php
    include 'koneksi.php';    
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
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
        if (empty($sampul_artikel)) {
            $query = "UPDATE tb_artikel SET id_kategori='$kategori', id_user='$user_id', url_artikel='$url_artikel', judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', tanggal='$tanggal_terbit' WHERE id_artikel='$id' ";
            $sql = mysqli_query($koneksi, $query);
            if ($sql) {
                header ("location: artikel.php");
            } else {
                echo "<script>alert('Maaf gagal menyimpan ke database'); window.location='artikel.php';</script>"; 
            }
        }else{
            if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
                if ($ukuran_file <= 1000000) {
                    if (move_uploaded_file($tmp_file, $folder.$sampul_artikel)) {
                        $query = "UPDATE tb_artikel SET id_kategori='$kategori', id_user='$user_id', url_artikel='$url_artikel', judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', sampul_artikel='$sampul_artikel', tanggal='$tanggal_terbit' WHERE id_artikel='$id' ";
                        $sql = mysqli_query($koneksi, $query);
                        if ($sql) {
                            header ("location: artikel.php");
                        } else {
                            echo "<script>alert('Maaf gagal menyimpan ke database'); window.location='artikel.php';</script>"; 
                        }
                    } else {
                        echo "<script>alert('Maaf gagal untuk mengupload gambar'); window.location='artikel.php';</script>";  
                    }
                } else {
                    echo "<script>alert('Ukuran gambar tidak boleh lebih dari 1MB'); window.location='artikel_edit.php?id=$id';</script>";
                }
            } else {
                echo "<script>alert('Format file harus JPG atau PNG!'); window.location='artikel_edit.php?id=$id';</script>";
            }
        }
    }
 ?>