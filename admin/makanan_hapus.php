<?php 
include 'koneksi.php';
$id = $_GET['id'];
	$gambar = mysqli_query($koneksi,"SELECT * FROM tb_makanan WHERE id_makanan='$id'");
	$data = mysqli_fetch_array($gambar);
	$img = "gambar/".$data['SAMPUL_MAKANAN'];
	if (file_exists($img)) {
		unlink($img);
	}
mysqli_query($koneksi,"delete from tb_makanan where id_makanan='$id'");

header("location:makanan.php");
?>