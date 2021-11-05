<?php  
	include 'koneksi.php';

	$id = $_GET['id'];
	$gambar = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$id'");
	$data = mysqli_fetch_array($gambar);
	$img = "gambar/".$data['foto'];
	if (file_exists($img)) {
		unlink($img);
	}
	mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user='$id' ");
	header("location:user.php?pesan=hapusBerhasil");

?>