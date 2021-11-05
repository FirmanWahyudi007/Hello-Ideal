<?php
	$koneksi = mysqli_connect("localhost", "root", "", "hallo_ideal");
	
	if(mysqli_connect_error()){
	    echo "Koneksi database gagal:".mysqli_connect_error();
	}
?>
