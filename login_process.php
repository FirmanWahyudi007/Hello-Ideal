<?php 
	session_start();
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password']; 
		$querySql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE email='$email'");
		$data = mysqli_fetch_array($querySql);
		var_dump($data);
		if ($email == $data['email']) {
			if ($password == $data['password']) {
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['user_id'] = $data['id_user'];
				$_SESSION['foto'] = $data['foto'];
				$_SESSION['status'] = "Login";
				$_SESSION['id_level'] = $data['id_level'];
				//echo "Nama : ".$_SESSION['nama']."dan".$data['NAMA'];
				//echo "ID : ".$_SESSION['user_id']."dan".$data['USER_ID'];
				header("location:admin/index.php?pesan=berhasil");
			} else {
				header("location:login.php?pesan=passwordsalah");
			}
		}else{
			header("location:login.php?pesan=emailsalah");
		}
	}
 ?>