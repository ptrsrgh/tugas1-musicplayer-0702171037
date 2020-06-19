<?php 

// Kalau sesi user_name tidak ada, redirect
if (!isset($_SESSION['user_name'])) {
	echo "<script>alert('Anda harus login terlebih dahulu!')</script>";	
	echo "<script>location='index.php?page=index_login'</script>";
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Putri Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/iconshead.png" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/header.jpg">
		</div>

		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artist_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Lagu</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="user_logout.php">Logout</a>
			<div class="text-user">Hi, <?php echo $_SESSION['user_name']; ?></div>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			&copy;. Putri Music Player - 2020&trade;
		</div>
	</div>
</body>
</html>