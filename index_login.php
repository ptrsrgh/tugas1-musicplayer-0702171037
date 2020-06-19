<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
	echo '<p style="color:red">Login tidak ditemukan!</p>';
	unset($_SESSION['login_error']);
}

// Kalau sesi user_name ada, redirect
if (isset($_SESSION['user_name'])) {	
	header("location:dashboard.php"); 
}

?>

<form class="form" action="index_proses.php" method="POST">
	<h2 class="judul-login">Silahkan Masuk!</h2>
	<hr>

	<label>Username</label>
	<input type="text" name="user_name" required="" autocomplete="off" placeholder="Masukkan username...">

	<label>Password</label>
	<input type="password" name="user_password" required="" autocomplete="off" placeholder="Masukkan password...">

	<input type="submit" name="btn-login" value="Login">
</form>