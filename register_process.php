<?php  
	include 'koneksi.php';

    if (isset($_POST['submit'])) {

    	$getId = mysqli_query($koneksi, "SELECT COUNT(id_user) as id FROM tb_user");
	    $dataId = mysqli_fetch_array($getId);
	    $lastId = $dataId['id'];

	    $newId = $lastId + 1;
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$kelamin = $_POST['kelamin'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];

	    $cekEmail = mysqli_num_rows(mysqli_query($koneksi, "SELECT email FROM tb_user WHERE email='$email'"));

		if (!$cekEmail > 0) {
			$query = "INSERT INTO tb_user VALUES ('$newId', '$nama', '$alamat', '$kelamin', '$nohp',
			'$password', '$email', '2')";
		    $sql = mysqli_query($koneksi, $query);
		    if ($sql) {
		    	header('location: login.php?pesan=daftarBerhasil');
		    }else{
		    	echo mysqli_error("Database Error : " . $koneksi);
		    }
		}else{
			header('location: login.php?pesan=emailTerdaftar');
		}

    }
?>
