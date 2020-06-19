<h2 class="judul">Data User</h2>
<hr class="garis-judul">
<div class="btn-tambah">
	<a href="dashboard.php?page=user_input">Tambah</a>
</div>

<?php 

$usr = new App\User();
$rows = $usr->tampil();

?>

<table>
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Email</th>
		<th>Nama Lengkap</th>
		<th>Role</th>
		<th>Opsi</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['user_email']; ?></td>
			<td><?php echo $row['user_nama_lengkap']; ?></td>
			<td>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td>
			<td><a href="dashboard.php?page=user_edit&id=<?php echo $row['user_id']; ?>" class="btn-edit">Edit</a></td>
		</tr>
	<?php } ?>
</table>