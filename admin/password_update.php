<?php  
	include 'koneksi.php';

    if (isset($_POST['submit'])) {

    	$id = $_POST['id_user'];
    	$getPassword = mysqli_query($koneksi, "SELECT password from tb_user where id_user='$id'");
    	$data = mysqli_fetch_array($getPassword);

    	$oldPassword = $data['password'];
    	$newPassword = $_POST['password'];

    	if ($_POST['oldpassword'] == $oldPassword) {
    		$query = "UPDATE tb_user SET password='$newPassword' WHERE id_user='$id'";
    		$sql = mysqli_query($koneksi, $query);
    		if($sql){
    			header('location: password.php?pesan=updateBerhasil');
    		}else{
    			echo mysqli_error($koneksi);
    		}
    	}else{
    		header('location: password.php?pesan=passwordSalah');
    	}
    }
?>