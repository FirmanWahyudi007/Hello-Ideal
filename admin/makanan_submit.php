<?php
include 'koneksi.php';
$id_user = $_POST['id_user'];
$nama_makanan = $_POST['nama_makanan'];
$lower = strtolower($nama_makanan);
$url_makanan = str_replace(" ", "-", $lower);
$resep_makanan = $_POST['resep_makanan'];
$kalori = $_POST['kalori'];
$sampul_makanan = $_FILES['sampul_makanan']['name'];
$ukuran_file = $_FILES['sampul_makanan']['size'];
$tipe_file = $_FILES['sampul_makanan']['type'];
$tmp_file = $_FILES['sampul_makanan']['tmp_name'];
$folder = "gambar/";

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
    if ($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $folder.$sampul_makanan)) {
            $query = "insert into tb_makanan values ('', '$url_makanan', '$sampul_makanan', '$nama_makanan', '$kalori','$resep_makanan','$id_user' )";
            $sql = mysqli_query($koneksi, $query);
            if ($sql) {
                header ("location: makanan.php");
            }else {
                echo mysqli_error($koneksi);
            }
        }else {
            echo "<script>alert('Maaf gagal untuk uploud gambar'); window.location='makanan.php';</script>";     
        }
    }else {
        echo "<script>alert('Ukuran gamabr tidak boleh lebih dari 1MB'); window.location='input_makanan.php';</script>";
    }
}else {
    echo "<script>alert('Ektensi gambar hanya bisa jpg dan png!'); window.location='input_makanan.php';</script>";
}
?>