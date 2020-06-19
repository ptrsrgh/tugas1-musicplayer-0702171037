<?php 

$id = $_GET['id'];

$user = new App\User();
$row = $user->edit($id);
?>

<h2 class="judul">Edit User</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="user_proses.php">
	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	
	<label>Username</label>
	<input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required="">
	
	<label>Password</label>
	<input type="password" name="user_password">
	<div><small>Kosongkan jika tidak ingin diubah</small></div>
	<br>
	
	<label>Email</label>
	<input type="text" name="user_email" value="<?php echo $row['user_email']; ?>" required="">
	
	<label>Nama Lengkap</label>
	<input type="text" name="user_nama_lengkap" value="<?php echo $row['user_nama_lengkap']; ?>" required="">
	
	<label>Role</label>
	<select name="user_role">
		<option value="1"<?php echo $row['user_role']==1 ? " selected" : ""; ?>>Administrator</option>
		<option value="2"<?php echo $row['user_role']==2 ? " selected" : ""; ?>>Operator</option>
	</select>
	

	<input type="submit" name="btn-update" value="Update">
</form>

<br>