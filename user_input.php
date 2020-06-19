<h2 class="judul">Tambah User</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="user_proses.php">
	<label>Username</label>
	<input type="text" name="user_name" required="" placeholder="Masukkan username baru...">
	
	<label>Password</label>
	<input type="password" name="user_password" required="" placeholder="Masukkan password akun baru...">
	
	<label>Email</label>
	<input type="text" name="user_email" required="" placeholder="Masukkan alamat email aktif...">
	
	<label>Nama Lengkap</label>
	<input type="text" name="user_nama_lengkap" required="" placeholder="Masukkan nama lengkap...">
	
	<label>Role</label>
	<select name="user_role">
		<option value="1">Administrator</option>
		<option value="2">Operator</option>
	</select>
	
	<input type="submit" name="btn-simpan" value="Simpan">
</form>

<br>