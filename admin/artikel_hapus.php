<?php  
	include 'koneksi.php';

	$id = $_GET['id'];
	$gambar = mysqli_query($koneksi,"SELECT * FROM tb_artikel WHERE id_artikel='$id'");
	$data = mysqli_fetch_array($gambar);
	$img = "gambar/".$data['SAMPUL'];
	if (file_exists($img)) {
		unlink($img);
	}
	mysqli_query($koneksi, "DELETE FROM tb_artikel WHERE id_artikel='$id' ");
	header("location:artikel.php");

?>